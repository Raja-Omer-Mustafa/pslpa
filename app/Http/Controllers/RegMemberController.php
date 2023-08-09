<?php

namespace App\Http\Controllers;

use App\Models\RegForm;
use App\Models\RegMemebers;
use Illuminate\Http\Request;

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
        ]);
       
        // Process and store uploaded files
        $photoFile = $validatedData['photo'];
        $photoPath = 'photos/' . $photoFile->getClientOriginalName();
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
        $regForm->save();

        return redirect()->back()->with('success', 'Registration form submitted successfully!');
    }

    function members_data(){
        $data = RegMemebers::paginate(15);
        return view('backend.register_members_page', compact('data'));
    }

    function reg_form_data(){
        $details = RegForm::paginate(15);
        return view('backend.online_registration_page', compact('details'));
    }

    public function register_member(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'affiliation' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'status' => 'required',
           
        ]);


        $regForm = new RegMemebers();
        $regForm->name = $validatedData['name'];
        $regForm->affiliation = $validatedData['affiliation'];
        $regForm->city = $validatedData['city'];
        $regForm->status = $validatedData['status'];
        $regForm->save();

        return redirect()->back()->with('success', 'Member Registered Successfully!');
    }

   public function get_member($id) 
    {
        $data = RegMemebers::where('id',$id)->first();
        return view('backend.update_register_members',['data'=>$data]);
    }

    public function update_member(Request $request, $id)
    {
        $member = RegMemebers::find($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'affiliation' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'status' => 'required',
           
        ]);
        if($member){
            $member->name =  $validatedData['name'];
            $member->affiliation = $validatedData['affiliation'];
            $member->city = $validatedData['city'];
            $member->status = $validatedData['status'];
            $member->save();

            return back()->with('success', 'Member updated successfully!');
        }
        else{
            return back()->with('error', 'Member did not found!');
        }
        
    }

    public function delete_member($id){
        $member = RegMemebers::where('id',$id)->first();
        if ($member) {
            $member->delete();
            return back()->with('success', 'Member deleted successfully!');
        } else {
            return back()->with('error', 'Member not found.');
        }
    }
}
