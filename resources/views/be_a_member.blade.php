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
    <div class="row">
        <h3 style="text-align: center;"><strong>PSLPA Registration Terms & Conditions</strong></h3>
        <p style="text-align: center;"><strong>Category: Member (MS/M.Phil/BS.SLP), Associate Member (MA/PGD Speech Language Therapy OR MA/PGDSLP/T)</strong></p>
        <p style="text-align: center;"><strong>Fee Schedule: PKR.2000/2year Member, PKR.2500/2year Associate Member,</strong></p>

        <p style="text-align: left;"><strong>*Registration is subject to the submission of verified documents from the relevant department/HOD with a stamp. In case of any ambiguity, the documents will be verified by the PSLPA registration office directly.</strong></p>
        <p style="text-align: left;"><strong>Following documents should be submitted with a copy of the receipt:</strong></p>
        <p style="text-align: left;"><strong>1. Attested copies of a matric certificate, intermediate, graduation, and further equivalent qualification degrees.</strong></p>
        <p style="text-align: left;"><strong>2. Verified copy of Master&rsquo;s degree or Post Graduate Diploma certificate of Speech-Language Therapy/Pathology.</strong></p>
        <p style="text-align: left;"><strong>3. Attested copy of CNIC or Passport.</strong></p>
        <p style="text-align: left;"><strong>4. Two passport size pictures attested from the backside.</strong></p>
        <div class="medium-9 small-12 columns">
            <h3 style="text-align: center;"><strong>Fill the PSLPA Registration Form Below</strong></h3>

            <div class="appointment-form">
                <form id="appoinment-form-fields" action="site/registrationform" enctype="multipart/form-data" method="post" class="appoinment-form-fields form-horizontal" data-fv-framework="bootstrap" data-fv-message="This value is not valid" data-fv-feedbackicons-valid="glyphicon glyphicon-ok" data-fv-feedbackicons-invalid="glyphicon glyphicon-remove" data-fv-feedbackicons-validating="glyphicon glyphicon-refresh">
                    @csrf
                    <div class="row">
                        <div class="medium-6 small-12 columns">
                            <label>
                                Your Name *
                                <input class="form-control" type="text" placeholder="Name" id="pwd" name="name" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Your Father Name *
                                <input class="form-control" type="text" placeholder="Father Name" id="pwd" name="father_name" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                CNIC# *
                                <input class="form-control" type="text" placeholder="CNIC" id="pwd" name="cnic_no" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                City# *
                                <input class="form-control" type="text" placeholder="" id="pwd" name="city" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Professional Qualification *
                                <input class="form-control" type="text" placeholder="" id="pwd" name="prof_qualification" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Year of Qualification *
                                <input class="form-control" type="text" placeholder="" id="pwd" name="year_qualification" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Your Mobile# *
                                <input class="form-control" type="text" placeholder="Mobile" id="pwd" name="mobile_no" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Your Landline#
                                <input class="form-control" type="text" placeholder="Landline" id="pwd" name="landline_no">
                            </label>
                        </div>

                        <div class="medium-6 small-12 columns">
                            <label>
                                Residential Address *
                                <input class="form-control" type="text" placeholder="" id="pwd" name="residential_address" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Office Address
                                <input class="form-control" type="text" placeholder="" id="pwd" name="official_address">
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Your Email *
                                <input class="form-control" type="text" placeholder="Email" id="pwd" name="email_id" type="text" data-fv-notempty="true" data-fv-notempty-message="The name is required">
                            </label>
                        </div>
                        <div class="medium-6 columns">
                            <label>
                                Select Membership Category *
                                <select class="form-control" type="text" name="mem_cetag" id="pwd" data-fv-notempty="true" data-fv-notempty-message="This Field is required">
                                    <option>-Select Category-</option>
                                    <option>Member(MS/M.Phil/BS.SLP)</option>
                                    <option>Associate Member(PGDSLP/T)</option>
                                </select>
                            </label>
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

                                </select>
                            </label>
                        </div>
                        <div class="medium-6 small-12 columns">
                            <label>
                                Date of Form Submission
                                <input class="form-control" type="date" placeholder="" id="pwd" name="submission_date">
                            </label>
                        </div>

                        <div class="medium-6 small-12 columns">
                            <label>
                                Attested copy of CNIC or Passport
                                <input class="form-control" type="file" placeholder="" id="pwd" name="cnic_copy">
                            </label>
                        </div>


                        <div class="medium-6 small-12 columns">
                            <label>
                                Attested Passport Size Picture
                                <input class="form-control" type="file" placeholder="" id="pwd" name="photo">
                            </label>
                        </div>


                        <div class="medium-6 small-12 columns">
                            <label>
                                Bank Deposit Slip/ Screenshot of Online Deposit
                                <input class="form-control" type="file" placeholder="" id="pwd" name="fee">
                            </label>
                        </div>


                        <div class="medium-6 small-12 columns">
                            <label>
                                Attach All Education Documents
                                <input class="form-control" type="file" multiple data-show-upload="true" placeholder="" id="pwd" name="doc">
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
@endsection