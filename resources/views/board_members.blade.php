@extends('layouts.app')

@section('content')
 <!-- Title Section -->
        <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1>Our Team</h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><span class="show-for-sr">Current: </span> Our Team</li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
        
        
        
        <!-- Our Team -->
        <div class="our-team module">
        	<div class="">
            	<div class="section-title">
                	<h2>Our Team</h2>
                    <p>PSLPA BOD's Members</p>
                </div>
            </div><!-- Section Title /-->
            
            <div class="row our-staff-page module">
            	
                <div class="doctor-column medium-6 small-12 columns">
                	<div class="doctor">
                        <div class="doctor-thumb float-right">
                            <a href="single-doctor.html">
                                <img src="{{ asset('images/help/DrNazia.jpg') }}" alt="Doctor Doe" />
                            </a>
                            <a href="single-doctor.html" class="button secondary">
                                Visit Profile
                            </a>    
                        </div><!-- Doctor thumb /-->
                        <div class="doctor-meta item-one">
                            <h3><strong>President</strong></h3>
                            <h3><a href="#">Dr.Nazia Mumtaz </a></h3>
                            <p>PhD (Rehabilitation Sciences)</p>
                           
							<div class="doctor-links">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>  <!--Doctor links /-->
                        </div><!-- Doctor meta /-->
                        <div class="clearfix"></div>    
                	</div><!-- Doctor Ends /-->
            	</div><!-- Docot Column Ends /-->
              	
           		<div class="doctor-column medium-6 small-12 columns">
                	<div class="doctor">
                        <div class="doctor-thumb float-left">
                            <a href="single-doctor.html">
                                <img src="{{ asset('images/help/Mrs Saima.jpg') }}" alt="Doctor Doe" />
                            </a>
                            <a href="single-doctor.html" class="button secondary">
                                Visit Profile
                            </a>    
                        </div><!-- Doctor thumb /-->
                        <div class="doctor-meta item-two">
                            <h3><strong>Vice President</strong></h3>
                            <h3><a href="#">Saima Tariq</a></h3>
                            <p>MS, SLP PhD* Rehabilitation Sciences </p>
                            <div class="doctor-links">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- Doctor links /-->
                        </div><!-- Doctor meta /-->
                        <div class="clearfix"></div>    
                	</div><!-- Doctor Ends /-->
            	</div><!-- Docot Column Ends /-->
        		
                <div class="doctor-column medium-6 small-12 columns">
                	<div class="doctor">
                        <div class="doctor-thumb float-right">
                            <a href="single-doctor.html">
                                <img src="{{ asset('images/help/Dr Sikander.jpg') }}" alt="Doctor Doe" />
                            </a>
                            <a href="single-doctor.html" class="button secondary">
                                Visit Profile
                            </a>    
                        </div><!-- Doctor thumb /-->
                        <div class="doctor-meta item-one">
                            <h3><strong>General Secretary</strong></h3>
                            <h3><a href="#">Dr. Muhammad Sikander Ghayas Khan</a></h3>
                            <p>MS-SLP, PhD</p>
                            <div class="doctor-links">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- Doctor links /-->
                        </div><!-- Doctor meta /-->
                        <div class="clearfix"></div>    
                	</div><!-- Doctor Ends /-->
            	</div><!-- Docot Column Ends /-->
              	
           		<div class="doctor-column medium-6 small-12 columns">
                	<div class="doctor">
                        <div class="doctor-thumb float-left">
                            <a href="single-doctor.html">
                                <img src="{{ asset('images/help/Dr Arshad.jpg') }}" alt="Doctor Doe" />
                            </a>
                            <a href="single-doctor.html" class="button secondary">
                                Visit Profile
                            </a>    
                        </div><!-- Doctor thumb /-->
                        <div class="doctor-meta item-two">
                            <h3><strong>Joint Secretary</strong></h3>
                            <h3><a href="#">Arshad Mahmood Naz</a></h3>
                            <p> PhD*Rehabilitation Ms-SLP</p>
                            <div class="doctor-links">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- Doctor links /-->
                        </div><!-- Doctor meta /-->
                        <div class="clearfix"></div>    
                	</div><!-- Doctor Ends /-->
            	</div><!-- Docot Column Ends /-->                
                
                <div class="doctor-column medium-6 small-12 columns">
                	<div class="doctor">
                        <div class="doctor-thumb float-right">
                            <a href="single-doctor.html">
                                <img src="{{ asset('images/help/Ms Humara.jpg') }}" alt="Doctor Doe" />
                            </a>
                            <a href="single-doctor.html" class="button secondary">
                                Visit Profile
                            </a>    
                        </div><!-- Doctor thumb /-->
                        <div class="doctor-meta item-one">
                            <h3><strong>Finance Secretary</strong></h3>
                            <h3><a href="#">Dr.Humaira Shamim Kiyani </a></h3>
                            <p>PhD Rehabilitation Sciences</p>
                            <div class="doctor-links">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- Doctor links /-->
                        </div><!-- Doctor meta /-->
                        <div class="clearfix"></div>    
                	</div><!-- Doctor Ends /-->
            	</div><!-- Docot Column Ends /-->
              	
           		<div class="doctor-column medium-6 small-12 columns">
                	<div class="doctor">
                        <div class="doctor-thumb float-left">
                            <a href="single-doctor.html">
                                <img src="{{ asset('images/help/Ms Faiza.jpg') }}" alt="Doctor Doe" />
                            </a>
                            <a href="single-doctor.html" class="button secondary">
                                Visit Profile
                            </a>    
                        </div><!-- Doctor thumb /-->
                        <div class="doctor-meta item-two">
                            <h3><strong>Information Secretary</strong></h3>
                            <h3><a href="#">Faiza Badar</a></h3>
                            <p>MS Speech Language Pathology </p>
                            <div class="doctor-links">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- Doctor links /-->
                        </div><!-- Doctor meta /-->
                        <div class="clearfix"></div>    
                	</div><!-- Doctor Ends /-->
            	</div><!-- Docot Column Ends /-->             
             <div class="doctor-column medium-6 small-12 columns">
                	<div class="doctor">
                        <div class="doctor-thumb float-right">
                            <a href="single-doctor.html">
                                <img src="{{ asset('images/help/doctorF.jpg') }}" alt="Doctor Doe" />
                            </a>
                            <a href="single-doctor.html" class="button secondary">
                                Visit Profile
                            </a>    
                        </div><!-- Doctor thumb /-->
						
                        <div class="doctor-meta item-one">
                            <h3><strong>Member BOD</strong></h3>
                            <h3><a href="#">Mrs.Shabnam Imran</a></h3>
                            <p>MS Speech & Language Pathology </p>
                            <div class="doctor-links">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- Doctor links /-->
                        </div><!-- Doctor meta /-->
                        <div class="clearfix"></div>    
                	</div><!-- Doctor Ends /-->
            	</div><!-- Docot Column Ends /-->
              	
           		<div class="doctor-column medium-6 small-12 columns">
                	<div class="doctor">
                        <div class="doctor-thumb float-left">
                            <a href="single-doctor.html">
                                <img src="{{ asset('images/help/DrSadaf.jpg') }}" alt="Doctor Doe" />
                            </a>
                            <a href="single-doctor.html" class="button secondary">
                                Visit Profile
                            </a>    
                        </div><!-- Doctor thumb /-->
                        <div class="doctor-meta item-two">
                            <h3><strong>Member BOD</strong></h3>
                            <h3><a href="#">Dr.Sadaf Noveen</a></h3>
                            <p>PhD Rehabilitation Sciences</p>
                            <div class="doctor-links">
                                <ul class="menu">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- Doctor links /-->
                        </div><!-- Doctor meta /-->
                        <div class="clearfix"></div>    
                	</div><!-- Doctor Ends /-->
            	</div><!-- Docot Column Ends /-->          
        	</div>
        </div>
        <!-- Our Team Ends /-->   
@endsection