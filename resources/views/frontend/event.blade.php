@extends('frontend.master')
@section('content')
 <div class="site-section site-hero inner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="d-block mb-3 caption" data-aos="fade-up">The</span>
            <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Event</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-4 mb-5">
            <div class="site-section-heading" data-aos="fade-up">
              <h2 class="text-center">Our Event</h2>
            </div>
          </div>
        </div>

        <div class="container mt-5 px-5">
    <!-- Category -->
    <div class="row">

          @foreach($events as $event)
      
     {{--  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center"> --}}
           <a href="{{route('buyticket',$event->id)}}"> 
            <img src="{{asset($event->photo)}}"  width="300px" height="200px">
             
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
            <blockquote>
                <p class="author mb-0 text-danger">Name:{{$event->name}}</p>
                
                <p class="text-danger">Address:{{$event->address}}</p>
                <p class="text-danger">Date:{{$event->Date}}</p>
                <p class="text-danger">Venue:{{$event->venue->name}}</p>
                <p class="text-danger">Duration:{{$event->start_time}} &nbsp; {{$event->end_time}}</p>
                
              </blockquote>
            </div>
        
            </a>
            </div>    
     {{--</div> --}}
      @endforeach
  
  

          
        

      </div>
    </div>


       

         



        

      </div>
    </div>

    


@endsection