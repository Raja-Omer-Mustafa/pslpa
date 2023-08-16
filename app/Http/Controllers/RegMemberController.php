<?php

namespace App\Http\Controllers;

use App\Models\RegForm;
use App\Mail\MemberMail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Jobs\SendVerificationEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class RegMemberController extends Controller
{
    function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'cnic_no' => 'required|string|unique:reg_form',
            'city' => 'required|string|max:255',
            'prof_qualification' => 'required|string|max:255',
            'year_qualification' => 'required|string|max:255',
            'mobile_no' => 'required|string|max:11|unique:reg_form',
            'landline_no' => 'required|string|max:255',
            'residential_address' => 'required|string|max:1000',
            'official_address' => 'required|string|max:1000',
            'email_id' => 'required|email|max:255|unique:reg_form',
            'mem_cetag' => 'required',
            'fee_schedule' => 'required|max:255',
            'submission_date' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'cnic_copy' => 'required|file|mimes:pdf,jpeg,png,jpeg,word|max:2048',
            'doc' => 'required|file|mimes:pdf,doc,docx,|max:2048',
            'fee' => 'required|mimes:pdf,doc,docx,jpeg,png,jpg|max:2048',
            'affiliation'=> 'required|max:255|string'
        ]);
       
        // Process and store uploaded files
        $photoFile = $validatedData['photo'];
        $photoPath = 'documents/' . $photoFile->getClientOriginalName();
        $photoFile->storeAs('public', $photoPath);

        $cnicCopyFile = $validatedData['cnic_copy'];
        $cnicCopyPath = 'documents/' . $cnicCopyFile->getClientOriginalName();
        $cnicCopyFile->storeAs('public',$cnicCopyPath);

        $docFile = $validatedData['doc'];
        $docPath = 'documents/' . $docFile->getClientOriginalName();
        $docFile->storeAs('public',$docPath);
        
        $feeFile = $validatedData['fee'];
        $feePath = 'documents/' . $feeFile->getClientOriginalName();
        $feeFile->storeAs('public',$feePath);


        $regForm = new RegForm();
        $regForm->verification_code = rand(1000000, 9999999);
        $regForm->name = $validatedData['name'];
        $regForm->father_name = $validatedData['father_name'];
        $regForm->cnic_no = $validatedData['cnic_no'];
        $regForm->city = $validatedData['city'];
        $regForm->prof_qualification = $validatedData['prof_qualification'];
        $regForm->year_qualification = $validatedData['year_qualification'];
        $regForm->mobile_no = $validatedData['mobile_no'];
        $regForm->landline_no = $validatedData['landline_no'];
        $regForm->residential_address = $validatedData['residential_address'];
        $regForm->official_address = $validatedData['official_address'];
        $regForm->email_id = $validatedData['email_id'];
        $regForm->mem_cetag = $validatedData['mem_cetag'];
        $regForm->fee_schedule = $validatedData['fee_schedule'];
        $regForm->submission_date = $validatedData['submission_date'];
        $regForm->photo = $photoPath;
        $regForm->cnic_copy = $cnicCopyPath;
        $regForm->doc = $docPath;
        $regForm->fee = $feePath;
        $regForm->affiliation = $validatedData['affiliation'];
        $regForm->save();
        
        $mailData = [
            'title' => 'Mail from PSLPA',
            'name'  => $validatedData['name'],
            'cnic_no'  => $validatedData['cnic_no'],
            'mobile_no'  => $validatedData['mobile_no'],
            'mem_cetag'  => $validatedData['mem_cetag'],
            'city'  => $validatedData['city'],
            'fee_schedule'  => $validatedData['fee_schedule'],
        ];
         
        Mail::to($validatedData['email_id'])->send(new MemberMail($mailData));
           
        return redirect()->back()->with('success', 'Registration form submitted successfully!');
    }

    function members_data(){
        $data = RegForm::where('status',1)->orderBy('created_at','desc')->paginate(10);
        return view('backend.register_members_page', compact('data'));
    }

    function reg_form_data(){
        $details = RegForm::where('status',0)->orderBy('created_at', 'desc')->paginate(15);
        return view('backend.online_registration_page', compact('details'));
    }

    // function RegForm_Data_Frontend(){
    //     $details = RegForm::where('status','1')->paginate(5);
    //     return view('country_directory', compact('details'));
    // }

    function search_regForm_data(Request $request){
        $searchQuery = $request->input('search');
        $query = RegForm::query();
        
        $query->where(function ($q) use ($searchQuery) {
            $q->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($searchQuery) . '%'])
              ->orWhereRaw('LOWER(city) LIKE ?', ['%' . strtolower($searchQuery) . '%'])
              ->orWhere('status', 'like', '%' . $searchQuery . '%');
        });
        
        
        $details = $query->where('status',1)->orderBy('created_at','desc')->paginate(10);

        return view('country_directory', compact('details'));

    }

    public function register_member(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'affiliation' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'status' => 'required',
           
        ]);


        $regForm = new RegForm();
        $regForm->name = $validatedData['name'];
        $regForm->affiliation = $validatedData['affiliation'];
        $regForm->city = $validatedData['city'];
        $regForm->status = $validatedData['status'];
        $regForm->save();

        return redirect()->back()->with('success', 'Member Registered Successfully!');
    }

   public function get_member($id) 
    {
        $data = RegForm::where('id',$id)->orderBy('created_at','desc')->first();
        return view('backend.update_register_members',['data'=>$data]);
    }

    public function update_member(Request $request, $id)
    {
        $member = RegForm::find($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'affiliation' => 'string|max:255',
            'city' => 'required|string|max:255',
            'status' => 'required',
           
        ]);
        
        if($member){
            $member->name =  $validatedData['name'];
            $member->affiliation = $validatedData['affiliation'];
            $member->city = $validatedData['city'];
            $member->status = $validatedData['status'];
            if($request->status == 0){
                $member->verification_code = null;
            }
            $member->save();

            return back()->with('success', 'Member updated successfully!');
        }
        else{
            return back()->with('error', 'Member did not found!');
        }
        
    }

    public function delete_member($id){
        $member = RegForm::where('id',$id)->first();
        if ($member) {
            $member->delete();
            return back()->with('success', 'Member deleted successfully!');
        } else {
            return back()->with('error', 'Member not found.');
        }
    }

    public function get_online_register_member($id) 
    {
        $data = RegForm::where('id',$id)->orderBy('created_at', 'desc')->first();
        return view('backend.update_online_registration_member',['data'=>$data]);
    }

    public function update_online_register_member(Request $request, $id)
    {
        $member = RegForm::find($id);
        
        if (!$member) {
            return redirect()->back()->with('error', 'Record not found.');
        }
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'cnic_no' => [
                'required',
                'string',
                Rule::unique('reg_form')->ignore($id),
            ],
            'city' => 'required|string|max:255',
            'prof_qualification' => 'required|string|max:255',
            'year_qualification' => 'required|string|max:255',
            'mobile_no' =>  [
                'required',
                'string',
                'max:11',
                Rule::unique('reg_form')->ignore($id),
            ],
            'landline_no' => 'required|string|max:255',
            'residential_address' => 'required|string|max:1000',
            'official_address' => 'required|string|max:1000',
            'email_id' =>  [
                'required',
                'string',
                Rule::unique('reg_form')->ignore($id),
            ],
            'mem_cetag' => 'required',
            'fee_schedule' => 'required|max:255',
            'submission_date' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'cnic_copy' => 'required|file|mimes:pdf,jpeg,png,jpeg,word|max:2048',
            'doc' => 'required|file|mimes:pdf,doc,docx,|max:2048',
            'fee' => 'required|mimes:pdf,doc,docx,jpeg,png,jpg|max:2048',
            'affiliation' => 'required|string|max:255',
        ]);

        if ($request->hasFile('photo')) {
            // Delete old photo
            Storage::delete($member->photo);
            // Process and store new photo
            $photoFile = $validatedData['photo'];
            $photoPath = 'documents/' . $photoFile->getClientOriginalName();
            $photoFile->storeAs('public', $photoPath);
            $member->photo = $photoPath;
        }

        if ($request->hasFile('cnic_copy')) {
            // Delete old cnic_copy
            Storage::delete($member->cnic_copy);
            // Process and store new cnic_copy
            $cnicCopyFile = $validatedData['cnic_copy'];
            $cnicCopyPath = 'documents/' . $cnicCopyFile->getClientOriginalName();
            $cnicCopyFile->storeAs('public', $cnicCopyPath);
            $member->cnic_copy = $cnicCopyPath;
        }
    
        if ($request->hasFile('doc')) {
            // Delete old doc
            Storage::delete($member->doc);
            // Process and store new doc
            $docFile = $validatedData['doc'];
            $docPath = 'documents/' . $docFile->getClientOriginalName();
            $docFile->storeAs('public', $docPath);
            $member->doc = $docPath;
        }
    
        if ($request->hasFile('fee')) {
            // Delete old fee
            Storage::delete($member->fee);
            // Process and store new fee
            $feeFile = $validatedData['fee'];
            $feePath = 'documents/' . $feeFile->getClientOriginalName();
            $feeFile->storeAs('public', $feePath);
            $member->fee = $feePath;
        }

        $member->name = $validatedData['name'];
        $member->father_name = $validatedData['father_name'];
        $member->cnic_no = $validatedData['cnic_no'];
        $member->city = $validatedData['city'];
        $member->prof_qualification = $validatedData['prof_qualification'];
        $member->year_qualification = $validatedData['year_qualification'];
        $member->mobile_no = $validatedData['mobile_no'];
        $member->landline_no = $validatedData['landline_no'];
        $member->residential_address = $validatedData['residential_address'];
        $member->official_address = $validatedData['official_address'];
        $member->email_id = $validatedData['email_id'];
        $member->mem_cetag = $validatedData['mem_cetag'];
        $member->fee_schedule = $validatedData['fee_schedule'];
        $member->submission_date = $validatedData['submission_date'];
        $member->affiliation = $validatedData['affiliation'];
        $member->photo = $photoPath;
        $member->cnic_copy = $cnicCopyPath;
        $member->doc = $docPath;
        $member->fee = $feePath;
        $member->save();
        return back()->with('success', 'Member updated successfully!');
    }

    public function delete_online_register_member($id){
        $member = RegForm::where('id',$id)->first();
        if ($member) {
            $member->delete();
            return back()->with('success', 'Member deleted successfully!');
        } else {
            return back()->with('error', 'Member not found.');
        }
    }

    function data_for_online_registration_view_button($id){
        $data = RegForm::where('id',$id)->first();
        return view('backend.online_registration_page_view_button',['data'=>$data]);
    }

    function data_for_register_members_view_button($id){
        $data = RegForm::where('id',$id)->first();
        return view('backend.register_members_view_button_page',['data'=>$data]);
    }

    function verify_online_register_member($id) {
        $member = RegForm::find($id);

        if(!$member){
            return back()->with('error',"Member not found!");
        }
        
        $member->status = 1;
        $member->save();
        SendVerificationEmail::dispatch($member);
        return back()->with('success', 'Member verified successfully!');
    }

    
}
