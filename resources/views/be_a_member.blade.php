@extends('layouts.app')

@section('content')
<!-- Title Section -->

<div class="title-section module">
    
    <div class="row">

        <div class="small-12 columns">
            <h1>PSLPA Registration Form</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/home">Home</a></li>
                <li><span class="show-for-sr">Current: </span> Registration Form</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->

    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->

<!-- Content Area Starts -->
<div class="content-area module appointment">
    <div>
    </div>
    <div class="row">
        <h3 style="text-align: center;"><strong>PSLPA Registration Terms & Conditions</strong></h3>
        <p style="text-align: center;"><strong>Category: Member (MS/M.Phil/BS.SLP), Associate Member (MA/PGD Speech Language Therapy OR MA/PGDSLP/T)</strong></p>
        <p style="text-align: center;"><strong>Fee Schedule: PKR.2000/2year Member, PKR.2500/2year Associate Member,</strong></p>

        <p style="text-align: center;"><strong>*Registration is subject to the submission of verified documents from the relevant department/HOD with a stamp. In case of any ambiguity, the documents will be verified by the PSLPA registration office directly.</strong></p>
        <p style="text-align: center;"><strong>Following documents should be submitted with a copy of the receipt:</strong></p>
        <p style="text-align: center;"><strong>1. Attested copies of a matric certificate, intermediate, graduation, and further equivalent qualification degrees.</strong></p>
        <p style="text-align: center;"><strong>2. Verified copy of Master&rsquo;s degree or Post Graduate Diploma certificate of Speech-Language Therapy/Pathology.</strong></p>
        <p style="text-align: center;"><strong>3. Attested copy of CNIC or Passport.</strong></p>
        <p style="text-align: center;"><strong>4. Two passport size pictures attested from the backside.</strong></p>
        <div class="medium-9 small-12 columns">
        @if(session('success'))
        <div id="Alert" class="alert alert-success m-4 border border-success p-5" role="alert" >
            <h4 style="text-align: center;background-color: rgb(126, 188, 126);color:rgb(255, 255, 255);padding:5px 0px;width:100%;border-radius:4px;">{{ session('success') }}</h4>
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('Alert').style.display = 'none';
            }, 4000); 
        </script> 
        @endif
            <h3 style="text-align: center;"><strong>Fill the PSLPA Registration Form Below</strong></h3>
            <div class="appointment-form">
                <form id="appoinment-form-fields" action="{{ url('/reg_form') }}" enctype="multipart/form-data" method="POST" class="appoinment-form-fields form-horizontal" data-fv-framework="bootstrap" data-fv-message="This value is not valid" data-fv-feedbackicons-valid="glyphicon glyphicon-ok" data-fv-feedbackicons-invalid="glyphicon glyphicon-remove" data-fv-feedbackicons-validating="glyphicon glyphicon-refresh">
                    @csrf
                    <div class="row">
                        <div class="medium-6 small-12 columns">
                            <label>
                                Your Name *
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Name"
                                    id="pwd"
                                    name="name"
                                    type="text"
                                    data-fv-notempty="true"
                                    data-fv-notempty-message="The name is required"
                                    value="{{ old('name') }}"
                                >
                                @error('name')
                                 <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                                @enderror
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Your Father Name *
                            </label>
                                <input 
                                    class="form-control" 
                                    type="text" 
                                    placeholder="Father Name" 
                                    id="pwd" 
                                    name="father_name" 
                                    type="text" 
                                    data-fv-notempty="true" 
                                    data-fv-notempty-message="The name is required"
                                    value="{{ old('father_name') }}"
                                >
                                @error('father_name')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                CNIC# *
                            </label>
                                <input 
                                    class="form-control" 
                                    type="text" 
                                    placeholder="CNIC" 
                                    id="cnic" 
                                    name="cnic_no" 
                                    type="text" 
                                    data-fv-notempty="true" 
                                    data-fv-notempty-message="The name is required"
                                    value="{{ old('cnic_no') }}"
                                >
                                @error('cnic_no')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                City# *
                            </label>
                                <input 
                                    class="form-control"
                                    type="text" 
                                    placeholder="" 
                                    id="pwd" 
                                    name="city" 
                                    type="text" 
                                    data-fv-notempty="true" 
                                    data-fv-notempty-message="The name is required"
                                    value="{{ old('city') }}"
                                >
                                @error('city')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Professional Qualification *
                            </label>
                                <input 
                                    class="form-control" 
                                    type="text" 
                                    placeholder="" 
                                    id="pwd" 
                                    name="prof_qualification" 
                                    type="text" 
                                    data-fv-notempty="true" 
                                    data-fv-notempty-message="The name is required"
                                    value="{{ old('prof_qualification') }}"
                                >
                                @error('prof_qualification')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Year of Qualification *
                            </label>
                                <input 
                                    class="form-control" 
                                    type="text" 
                                    placeholder="" 
                                    id="pwd" 
                                    name="year_qualification" 
                                    type="text" 
                                    data-fv-notempty="true" 
                                    data-fv-notempty-message="The name is required"
                                    value="{{ old('year_qualification') }}"
                                >
                                @error('year_qualification')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Affiliation *
                            </label>
                                <input 
                                    class="form-control" 
                                    type="text"   
                                    name="affiliation" 
                                    type="text" 
                                    data-fv-notempty="true" 
                                    data-fv-notempty-message="The name is required"
                                    value="{{ old('affiliation') }}"
                                >
                                @error('affiliation')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Your Mobile# *
                            </label>
                                <input 
                                    class="form-control" 
                                    type="text" 
                                    placeholder="Mobile" 
                                    id="pwd" 
                                    name="mobile_no" 
                                    type="text" 
                                    data-fv-notempty="true" 
                                    data-fv-notempty-message="The name is required"
                                    value="{{ old('mobile_no') }}"
                                >
                                @error('mobile_no')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Your Landline#
                            </label>
                                <input 
                                    class="form-control" 
                                    type="text" 
                                    placeholder="Landline" 
                                    id="pwd" 
                                    name="landline_no"
                                    value="{{ old('landline_no') }}"
                                >
                                @error('landline_no')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                        </div>

                        <div class="medium-6 small-12 columns">
                            <label>
                                Residential Address *
                            </label>
                                <input 
                                    class="form-control" 
                                    type="text" 
                                    placeholder="" 
                                    id="pwd" 
                                    name="residential_address" 
                                    type="text" 
                                    data-fv-notempty="true" 
                                    data-fv-notempty-message="The name is required"
                                    value="{{ old('residential_address') }}"
                                >
                                @error('residential_address')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Office Address
                            </label>
                                <input 
                                    class="form-control" 
                                    value="{{ old('official_address') }}" 
                                    type="text" 
                                    placeholder="" 
                                    id="pwd" 
                                    name="official_address"
                                >
                                @error('official_address')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Your Email *
                            </label>
                                <input 
                                    class="form-control" 
                                    type="text" 
                                    placeholder="Email" 
                                    id="pwd"
                                    name="email_id" 
                                    type="text" 
                                    data-fv-notempty="true" 
                                    data-fv-notempty-message="The name is required"
                                    value="{{ old('email_id') }}"
                                >
                                @error('email_id')
                                <p class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</p>
                               @enderror
                        </div>
                        <div class="medium-6 columns">
                            <label>
                                Select Membership Category *
                                <select class="form-control" type="text" name="mem_cetag" id="pwd" data-fv-notempty="true" data-fv-notempty-message="This Field is required">
                                    <option value="">-Select Category-</option>
                                    {{-- <option>Member(MS/M.Phil/BS.SLP)</option>
                                    <option>Associate Member(PGDSLP/T)</option> --}}
                                    @foreach (\App\Models\RegForm::MEMBERSHIP_CATEGORY as $id => $category)
                                        <option value="{{ $id }}">{{ $category }}</option>
                                    @endforeach
                                </select>
                                @error('mem_cetag')
                                <p class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</p>
                               @enderror
                            </label>
                        </div>
                        <div class="medium-6 columns">
                            <label>
                                Select Fee Schedule
                                <select class="form-control" type="text" name="fee_schedule" id="pwd" data-fv-notempty="true" data-fv-notempty-message="This Field is required">
                                    <option value="">-Select Fee Schedule-</option>
                                    @foreach (\App\Models\RegForm::FEE_PLANS as $id => $title)
                                        <option value="{{ $id }}">{{ $title }}</option>
                                    @endforeach
                                </select>
                                @error('fee_schedule')
                                 <p class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Date of Form Submission
                                <input class="form-control" type="date" placeholder="" id="pwd" name="submission_date">
                                @error('submission_date')
                                <p class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</p>
                               @enderror
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Attested copy of CNIC or Passport (pdf,jpeg,png,jpeg,word)
                                <input class="form-control" type="file" placeholder="" id="pwd" name="cnic_copy">
                                @error('cnic_copy')
                                <p class="error" style="color:rgb(229, 62, 62);margin:-10px 0px 0px 0px;">{{ $message }}</p>
                               @enderror
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Attested Passport Size Picture (jpg,jpeg,png)
                                <input class="form-control" type="file" placeholder="" id="pwd" name="photo">
                                @error('photo')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Bank Deposit Slip/ Screenshot of Online Deposit (pdf,doc,docx,jpeg,png,jpg)
                                <input class="form-control" type="file" placeholder="" id="pwd" name="fee">
                                @error('fee')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Attach All Education Documents (pdf,doc,dox) 
                                <input class="form-control" type="file" multiple data-show-upload="true" placeholder="" id="pwd" name="doc">
                                @error('doc')
                                <div class="error" style="color:rgb(229, 62, 62);margin:-10px 0px -10px 0px;">{{ $message }}</div>
                               @enderror
                            </label>
                        </div>

                        <div class="medium-12 columns">
                            <button class="primary button" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <p style="text-align: left;"><strong>Membership cards are printed biannually i.e. August and January </strong></p>
            </div><!-- contact Form ends here. -->
        </div> <!-- right sidebar ends -->



    </div><!-- row / -->
</div>
<!-- Content Area Ends /-->
<script>
    document.getElementById('cnic').addEventListener('input', function (e) {
        var input = e.target.value;
        
        // Remove all non-digit characters
        var cnic = input.replace(/\D/g, '');
        
        // Add hyphens in the correct positions
        if (cnic.length >= 5 && cnic.length < 13) {
            cnic = cnic.substring(0, 5) + '-' + cnic.substring(5);
        } else if (cnic.length >= 13) {
            cnic = cnic.substring(0, 5) + '-' + cnic.substring(5, 12) + '-' + cnic.substring(12, 13);
        }
        
        // Set the formatted CNIC value back to the input
        e.target.value = cnic;
    });
</script>
@endsection