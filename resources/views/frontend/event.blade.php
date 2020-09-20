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
   

        <div class="container mt-5 px-5">
    <!-- Category -->
    <div class="row">

          @foreach($events as $event)
      
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
        <div class="{{-- card --}} categoryCard  {{-- rounded text-center --}}">
           <a href="{{route('buyticket',$event->id)}}"> 
            <img src="{{asset($event->photo)}}"  class="card-img-top" alt="...">
             
            <div class="card-body">
            <blockquote>
                <p class="author mb-0 text-danger">Name:{{$event->name}}</p>
                
                {{-- <p class="text-danger">Address:{{$event->address}}</p> --}}
                <p class="text-danger">Date:{{$event->Date}}</p>
                <p class="text-danger">Venue:{{$event->venue->name}}</p>
                <p class="text-danger">Duration:{{$event->start_time}} &nbsp; {{$event->end_time}}</p>
                
              </blockquote>
            </div>
        
            </a>
            </div>    
     </div> 
      @endforeach
  
  

          
        

      </div>
    </div>
@endsection