@extends('frontend.master')
@section('content')
<div class="site-section site-hero inner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="d-block mb-3 caption" data-aos="fade-up">The</span>
            <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Venue</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-4 mb-5">
            <div class="site-section-heading" data-aos="fade-up">
              <h2 class="text-center">Our Venue</h2>
            </div>
          </div>
        </div>

        <div class="row">
        	@foreach($venues as $venue)
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="100">
            <div class="testimony text-center"> 
              <figure>
                <img src="{{asset($venue->photo)}}" alt="Cinque Terre" class="rounded">
              </figure>
              <blockquote>
                <p class="author mb-0">{{$venue->name}}</p>
                
                <p>{{$venue->address}}</p>
                
              </blockquote>
            </div>
          </div>
          @endforeach
          
        

      </div>
    </div>

    
@endsection