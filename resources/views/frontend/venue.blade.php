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

       {{--  <div class="row">
        	@foreach($venues as $venue)
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="100">
            <div class="testimony text-center"> 
              <figure>
                 <img src="{{asset($venue->photo)}}" class="rounded" alt="Cinque Terre" width="300px" height="200px"> 
              </figure>
              <blockquote>
                <p class="author mb-0">{{$venue->name}}</p>
                
                <p>{{$venue->address}}</p>
                
              </blockquote>
            </div>
          </div>
          @endforeach --}}

         <div class="container mt-5 px-5">
		<!-- Category -->
		<div class="row">
        	@foreach($venues as $venue)
			
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
					
				  	<img src="{{asset($venue->photo)}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    <blockquote>
                <p class="author mb-0">{{$venue->name}}</p>
                
                <p>{{$venue->address}}</p>
                
              </blockquote></div>
				
				  	
				</div>
			</div>
			@endforeach
  
  

          
        

      </div>
    </div>

    
@endsection