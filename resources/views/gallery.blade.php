@extends('layouts.app')

@section('content')
<!-- Title Section -->
        <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1>Our Pictures Gallery</h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="/home">Home</a></li>
                        <li><span class="show-for-sr">Current: </span> Gallery</li>
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
        
        
       <!-- Content Area Starts -->
        <div class="module">
        	
            <div class="">
                <div class="section-title">
                    <h2>PSLPA GALLERY </h2>
                    <p>Some Amazing Stuff About PSLPA</p>
                </div>
             </div><!-- Section Title Ends /-->   
            
        	<div class="gallery-container">
    
                    <a href="{{ asset('images/help/gallery/gallery1.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery1.jpg')}}" alt=""/>
                    </a>
                    <a href="{{ asset('images/help/gallery/gallery2.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery2.jpg')}}" alt=""/>
                    </a>
                    <a href="{{ asset('images/help/gallery/gallery3.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery3.jpg')}}" alt=""/>
                    </a>
                    <a href="{{ asset('images/help/gallery/gallery4.jpg')}}" data-lightbox="campus-gallery">
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery4.jpg')}}" alt=""/>
                    </a>
                    <a href="{{ asset('images/help/gallery/gallery5.jpg')}}" data-lightbox="campus-gallery">
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery5.jpg')}}" alt=""/>
                    </a>
                    <a href="{{ asset('images/help/gallery/gallery6.jpg')}}" data-lightbox="campus-gallery">
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery6.jpg')}}" alt=""/>
                    </a>
                    <a href="{{ asset('images/help/gallery/gallery7.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery7.jpg')}}" alt=""/>
                    </a>
                    <a href="{{ asset('images/help/gallery/gallery8.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery8.jpg')}}" alt=""/>
                    </a>
                    <a href="{{ asset('images/help/gallery/gallery9.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery9.jpg')}}" alt=""/>
                    </a>
                    <a href="{{ asset('images/help/gallery/gallery10.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery10.jpg')}}" alt=""/>
                    </a>
                    <a href="{{ asset('images/help/gallery/gallery11.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery11.jpg')}}" alt=""/>
                    </a>
                    <a href="{{ asset('images/help/gallery/gallery12.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery12.jpg')}}" alt=""/>
                    </a>
					<a href="{{ asset('images/help/gallery/gallery13.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery13.jpg')}}" alt=""/>
                    </a>
					<a href="{{ asset('images/help/gallery/gallery14.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery14.jpg')}}" alt=""/>
                    </a>
					<a href="{{ asset('images/help/gallery/gallery15.jpg')}}" data-lightbox="campus-gallery">
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery15.jpg')}}" alt=""/>
                    </a>
					<a href="{{ asset('images/help/gallery/gallery16.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery16.jpg')}}" alt=""/>
                    </a>
                <a href="{{ asset('images/help/gallery/gallery17.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery17.jpg')}}" alt=""/>
                    </a>
					<a href="{{ asset('images/help/gallery/gallery18.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery18.jpg')}}" alt=""/>
                    </a>
					<a href="{{ asset('images/help/gallery/gallery19.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery19.jpg')}}" alt=""/>
                    </a>
					<a href="{{ asset('images/help/gallery/gallery20.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery20.jpg')}}" alt=""/>
                    </a>
					<a href="{{ asset('images/help/gallery/gallery21.jpg')}}" data-lightbox="campus-gallery" >
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery21.jpg')}}" alt=""/>
                    </a>
					<a href="{{ asset('images/help/gallery/gallery22.jpg')}}" data-lightbox="campus-gallery">
                        <img class="gallery-thumb" src="{{ asset('images/help/gallery/gallery22.jpg')}}" alt=""/>
                    </a>
					
            </div><!-- Gallery Container /-->
                
        </div>
        <!-- Content Area Ends /-->
@endsection