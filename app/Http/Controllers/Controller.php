<?php

namespace App\Http\Controllers;

use App\Models\RegForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Validation\Rule;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function get_online_register_member($id) 
    {
        $data = RegForm::where('id',$id)->first();
        return view('backend.update_online_registration_member',['data'=>$data]);
    }

    public function update_member(Request $request, $id)
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
            'email_id' => 'required|email|max:255|unique:reg_form',
            'mem_cetag' => 'required',
            'fee_schedule' => 'required|max:255',
            'submission_date' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'cnic_copy' => 'required|file|mimes:pdf,jpeg,png,jpeg,word|max:2048',
            'doc' => 'required|file|mimes:pdf,doc,docx,|max:2048',
            'fee' => 'required|mimes:pdf,doc,docx,jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            // Delete old photo
            Storage::delete($member->photo);
            // Process and store new photo
            $photoFile = $validatedData['photo'];
            $photoPath = 'photos/' . $photoFile->getClientOriginalName();
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
        $member->photo = $photoPath;
        $member->cnic_copy = $cnicCopyPath;
        $member->doc = $docPath;
        $member->fee = $feePath;
        $member->save();
        return back()->with('success', 'Member updated successfully!');
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
}
