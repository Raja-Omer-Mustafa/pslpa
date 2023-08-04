<!DOCTYPE html>
<html>

<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>PSLPA Offical</title>
    
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400%7CRoboto:900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/css/navigation.css')}}">
    
</head>

<body>

	<!-- Main Container -->
    <div class="main-container">
    
    	<!-- Top Bar -->
        <div class="topBar">
        	<div class="row">
            	
               
                
                <div class="medium-6 small-12 columns">
                	<ul class="menu social pull-left">
                    	<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                    </ul>
                </div><!-- Left Column /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Top Bar Ends /-->	
    	
        <!-- Header -->
        <div class="header">
        	<div class="row">
            	
                <div class="medium-4 small-12 columns logo">
                	<a href="/home"><img src="{{ asset('images/logo.png') }}" alt="Webful Vision Eye Care" /></a>
                </div><!-- Logo /-->
                
                <div class="medium-8 small-12 columns">
                	
                    <div class="medium-4 small-12 columns medium-offset-5">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p>Our Location<br>
                                	<strong>3rd Floor, Doctors Plaza, G8 Markaz, Islamabad</strong>
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- Column Ends /-->
                    
                    <div class="medium-4 small-12 columns small-box">
                        <div class="icon-box">
                            <div class="icon-side float-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div><!-- icon side /-->
                            <div class="info-side float-left">
                                <p>Call Us<br>
                                	<strong>03322266136</strong>
                                </p>
                            </div><!-- info side /-->
                            <div class="clearfix"></div>
                        </div><!-- icon-box /-->
                    </div><!-- Column Ends /-->
                    
                </div><!-- Right side /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Header Ends /-->
        
        <!-- Navigation Starts -->
        <div class="navigation">
        	<div class="row">
            
            	<!-- navigation Code STarts here.. -->
                <div class="top-bar">
                    <div class="top-bar-title">
                        <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                            <a data-toggle><span class="menu-icon dark float-left"></span></a>
                        </span>
                    </div>
                  
                    <nav id="responsive-menu" class="menu-centered">
                        <ul class="menu vertical medium-horizontal" data-responsive-menu="accordion medium-dropdown">
                             <li class="single-sub parent-nav"><a href="/home">Home</a></li>
                             <li class="single-sub parent-nav"><a href="/about">About us</a></li>
							 <li class="single-sub parent-nav"><a href="/board-members">Board Members</a></li>
							 <li class="single-sub parent-nav"><a href="/gallery">Gallery</a></li>
							 <li class="single-sub parent-nav"><a href="be-a-member">Be a Member</a></li>
							 <li class="single-sub parent-nav"><a href="/country-directory">Country Directory</a></li>
							 <li class="single-sub parent-nav"><a href="https://blueeconomynews.com/2023/03/26/international-opportunities-for-speech-language-pathologists-therapists/">What's New !</a></li>
                        </ul>
                	</nav>
                </div><!-- top-bar Ends -->
             	<!-- Navigation Code Ends here -->
                
            </div><!-- Row Ends /-->
        </div>
        <!-- Navigation Ends /-->

        @yield('content')



 <!-- Footer -->
        <div class="footer">
           
        
            <div class="footerbottom">
                <div class="row">
                
                    <div class="medium-6 small-12 columns">
                        <div class="copyrightinfo">2020 - 2021 &copy; <a href="#">Pakistan Speech & Language Pathologist Association</a> All Rights Reserved.</div>
                    </div><!-- left side /-->
                  
                
                </div><!-- Row /-->
            </div><!-- footer Bottom /-->
        </div>
        <!-- Footer Ends here /-->
        
    </div>
    <!-- Main Container ends /-->
	
   
    
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>
	<!-- Page Preloader 
    <div class="preloader">
        <div class="cssload-thecube">
            <div class="cssload-cube cssload-c1"></div>
            <div class="cssload-cube cssload-c2"></div>
            <div class="cssload-cube cssload-c4"></div>
            <div class="cssload-cube cssload-c3"></div>
        </div>
	</div>
    -->
    <script type="text/javascript" src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/foundation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('lib/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('lib/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{ asset('js2/webful.js')}}"></script> 


</body>
</html>
