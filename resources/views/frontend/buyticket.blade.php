@extends('frontend.master')
@section('content')
<div class="site-section site-hero inner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="d-block mb-3 caption">Buy Tickets</span>
            <h1 class="d-block mb-4">Tickets</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        

        <div class="row">
          
          @foreach($tickets as $ticket)
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0"  data-aos="fade-up" data-aos-delay="200">
            <div class="pricing border-secondary text-center">
              <h2>{{$ticket->name}}</h2>
              <div class="amount"><span class="number">{{$ticket->price}}</span><sup>Ks</sup> </div>
              {{-- <ul class="list-unstyled mb-5">
                <li>1-Day Entrance</li>
                <li>Essential Access</li>
                <li>1 Guest Ticket</li>
                <li>1 Workshop</li>
                <li>Free Snacks</li>
              </ul> --}}
              <div><a href="#" class="btn btn-secondary px-4 py-2">Buy Ticket</a></div>
            </div>
          </div>
          @endforeach
          

          

        </div>
      </div>
    </div>
    @endsection