@extends('layouts.app')

@section('content')
<!-- Title Section -->
<div class="title-section module">
    <div class="row">

        <div class="small-12 columns">
            <h1>About Us</h1>
        </div><!-- Top Row /-->

        <div class="small-12 columns">
            <ul class="breadcrumbs">
                <li><a href="/home">Home</a></li>
                <li><span class="show-for-sr">Current: </span> About us</li>
            </ul><!-- Breadcrumbs /-->
        </div><!-- Bottom Row /-->

    </div><!-- Row /-->
</div>
<!-- Title Section Ends /-->


<!-- Welcome Message -->
<div class="welcome-message about-us module">
    <div class="row">

        <div class="medium-6 small-12 columns">
            <img src="{{ asset('images/help/optometrist-feature.png') }}" alt="Best Optometrist" />
        </div><!-- Thumbnail /-->

        <div class="medium-6 small-12 columns padding-bottom">
            <h2>Welcome To <span>PSLPA</span></h2>
            <h3>Pakistan Speech & Language Pathologist Association</h3>
            <p style="text-align: justify;">The PSLPA is a professional health body established for the rapidly emerging discipline of Speech & Language Pathology in Pakistan.
                It aims for provision of standardised speech, language/ communication , swallowing disorders and their appropriate management , assessment & intervention services from paediatric to geriatric population leading to rehabilitation of the individual.
                PSLPA also endeavours to secure academic & training skills & services arising due to such disorders.

                PSLPA strives to propose to the public sector recruitment bodies , Federal & National Health Commission & Higher Education Commissions to develop & harmonise rehabilitation curricula.

                Further PSPLA encourages research in rehabilitation sciences and developing linkages with internationally recognised research e portals & sharing of international best rehabilitation practises. PSLPA does not hesitate to eliminate quackery in the rehabilitation domain.</p>
            <div class="awards">

                <blockquote><strong>Dr. Nazia Mumtaz</strong> <br>
                    PhD (Rehabilitation Sciences)
                    <br>
                    President PSLPA
                </blockquote>
            </div><!-- awards /-->
        </div><!-- Detail /-->

    </div><!-- Row /-->
</div>
<!-- Welcome Message Ends /-->

@endsection