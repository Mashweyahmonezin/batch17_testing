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


        <div class="row">

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="100">
            <div class="testimony text-center"> 
              <figure>
                <img src="{{asset('frontend/images/2.jpg')}}" alt="Image" class="img-fluid">
              </figure>
              <blockquote>

               <p class="author mb-0">Jason Ross:The Atlas</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Monday,September 14,2020-8:00 PM </p>

                <p class="author mb-0">Emely Peters</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>


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
  
  

          
        


          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="200">
            <div class="testimony text-center">
              <figure>
                <img src="{{asset('frontend/images/3.jpg')}}" alt="Image" class="img-fluid">
              </figure>
              <blockquote>

                 <p class="author mb-0">JST JR:Group Chat</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Thursday,November 15,2020-9:00 PM </p>

                <p class="author mb-0">Alex Anchors</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>

                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="300">
            <div class="testimony text-center">
              <figure>
                <img src="{{asset('frontend/images/4.jpg')}}" alt="Image" class="img-fluid">
              </figure>
              <blockquote>

                <p class="author mb-0">Craze:Live From Miami</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Wednesday,September 16,2020-6:00 PM </p>

                <p class="author mb-0">Aaron Thomas</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>

                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="400">
            <div class="testimony text-center">
              <figure>
                <img src="{{asset('frontend/images/5.jpg')}}" alt="Image" class="img-fluid">
              </figure>
              <blockquote>

                <p class="author mb-0">Tritonal:Enhanced Sessions</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Thursday,September 17,2020-5:00 PM</p>

                <p class="author mb-0">Emely Peters</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>

                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="500">
            <div class="testimony text-center">
              <figure>
                <img src="{{asset('frontend/images/8.jpg')}}" alt="Image" class="img-fluid">
              </figure>
              <blockquote>

                <p class="author mb-0">Four Tet(Live)</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Tuesday,October 27,2020-7:00 PM</p>

                <p class="author mb-0">Alex Anchors</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>

                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="600">
            <div class="testimony text-center">
              <figure>
                <img src="{{asset('frontend/images/9.jpeg')}}" alt="Image" class="img-fluid">
              </figure>
              <blockquote>

                <p class="author mb-0">SLANDER</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Friday,October 30,2020-8:00 PM</p>

                <p class="author mb-0">Aaron Thomas</p>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>

                
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>



        

      </div>
    </div>

    


@endsection