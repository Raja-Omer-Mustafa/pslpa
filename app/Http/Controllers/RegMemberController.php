<?php

namespace App\Http\Controllers;

use App\Models\RegForm;
use Illuminate\Http\Request;

class RegMemberController extends Controller
{
    function store(Request $request)
    {
        // dd($request->cnic_no);
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
            'fee_schedule' => 'required',
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
        $docFile->storeAs('public',$docFile);
        
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
}
