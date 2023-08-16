@extends('backend.layouts.app')

@section('backend_content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Reg Form </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    @if(session('success'))
        <div id="Alert" class="alert alert-success m-4">
            <h5>{{ session('success') }}</h5>
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('Alert').style.display = 'none';
            }, 4000); 
        </script>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="ba mt-2ckground-color: rgb(236, 236, 236)">
                    <div class="card-body table-responsive p-0">
                        <div class="m-5">
                            <form id="appoinment-form-fields" action="{{ route('reg_form') }}" enctype="multipart/form-data" method="post" class="appoinment-form-fields form-horizontal" data-fv-framework="bootstrap" data-fv-message="This value is not valid" data-fv-feedbackicons-valid="glyphicon glyphicon-ok" data-fv-feedbackicons-invalid="glyphicon glyphicon-remove" data-fv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                @csrf
                                    <div class="mb-3">
                                        <label>
                                            Your Name *
                                        </label>
                                            <input class="form-control" type="text" placeholder="Name" id="pwd" name="name" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                                            @error('name')
                                             <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Your Father Name *
                                        </label>
                                            <input class="form-control" type="text" placeholder="Father Name" id="pwd" name="father_name" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                                            @error('father_name')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            CNIC# *
                                        </label>
                                            <input class="form-control" type="text" placeholder="CNIC" id="cnic" name="cnic_no" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                                            @error('cnic_no')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            City# *
                                        </label>
                                            <input class="form-control" type="text" placeholder="" id="pwd" name="city" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                                            @error('city')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Professional Qualification *
                                        </label>
                                            <input class="form-control" type="text" placeholder="" id="pwd" name="prof_qualification" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                                            @error('prof_qualification')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Year of Qualification *
                                        </label>
                                            <input class="form-control" type="text" placeholder="" id="pwd" name="year_qualification" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                                            @error('year_qualification')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Affiliation *
                                        </label>
                                            <input  class="form-control" type="text" placeholder="" id="pwd" name="affiliation" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                                            @error('affiliation')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Your Mobile# *
                                        </label>
                                            <input class="form-control" type="text" placeholder="Mobile" id="pwd" name="mobile_no" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                                            @error('mobile_no')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Your Landline#
                                        </label>
                                            <input class="form-control" type="text" placeholder="Landline" id="pwd" name="landline_no">
                                            @error('landline_no')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
            
                                    <div class="mb-3">
                                        <label>
                                            Residential Address *
                                        </label>
                                            <input class="form-control" type="text" placeholder="" id="pwd" name="residential_address" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                                            @error('residential_address')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Office Address
                                        </label>
                                            <input class="form-control" type="text" placeholder="" id="pwd" name="official_address">
                                            @error('official_address')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Your Email *
                                        </label>
                                            <input class="form-control" type="text" placeholder="Email" id="pwd" name="email_id" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                                            @error('email_id')
                                            <p class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</p>
                                           @enderror
                                    </div>
                                    <div class="medium-6 columns">
                                        <label>
                                            Select Membership Category *
                                            <select class="form-control" type="text" name="mem_cetag" id="pwd" data-fv-notempty="true" data-fv-notempty-message="This Field is required">
                                                <option>-Select Category-</option>
                                                <option>Member(MS/M.Phil/BS.SLP)</option>
                                                <option>Associate Member(PGDSLP/T)</option>
                                            </label>
                                            @error('mem_cetag')
                                             <p class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</p>
                                            @enderror
                                            </select>
                                    </div>
                                    <div class="medium-6 columns">
                                        <label>
                                            Select Fee Schedule
                                            <select class="form-control" type="text" name="fee_schedule" id="pwd" data-fv-notempty="true" data-fv-notempty-message="This Field is required">
                                                <option>-Select Fee Schedule-</option>
                                                <option>PKR.2000/2years Member</option>
                                                <option>PKR.2500/2years Associate Member</option>
                                                <option>PKR.10000/5years Member</option>
                                                <option>PKR.12500/5years Associate Member</option>
                                            </label>
                                            </select>
                                            @error('fee_schedule')
                                             <p class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</p>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Date of Form Submission
                                        </label>
                                            <input class="form-control" type="date" placeholder="" id="pwd" name="submission_date">
                                            @error('submission_date')
                                            <p class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</p>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Attested copy of CNIC or Passport (pdf,jpeg,png,jpeg,word)
                                        </label>
                                            <input class="form-control" type="file" placeholder="" id="pwd" name="cnic_copy">
                                            @error('cnic_copy')
                                            <p class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px 0px 0px;">{{ $message }}</p>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Attested Passport Size Picture (jpg,jpeg,png)
                                        </label>
                                            <input class="form-control" type="file" placeholder="" id="pwd" name="photo">
                                            @error('photo')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Bank Deposit Slip/ Screenshot of Online Deposit (pdf,doc,docx,jpeg,png,jpg)
                                        </label>
                                            <input class="form-control" type="file" placeholder="" id="pwd" name="fee">
                                            @error('fee')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>
                                            Attach All Education Documents (pdf,doc,dox) 
                                        </label>
                                            <input class="form-control" type="file" multiple data-show-upload="true" placeholder="" id="pwd" name="doc">
                                            @error('doc')
                                            <div class="error mt-2" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                           @enderror
                                    </div>
            
                                    <div class="medium-12 columns">
                                        <button class="btn btn-success button" type="submit">Submit</button>
                                    </div>
                            </form>
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection