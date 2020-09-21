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

   {{--  <div class="site-section"> --}}
      <div class="container">
        

        <div class="row">
          
          @foreach($tickets as $ticket)



          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0"  data-aos="fade-up" data-aos-delay="200">
            <div class="pricing border-secondary text-center">
              <h2>{{$ticket->name}}</h2>
              <h2>{{$ticket->event->name}}</h2>
              <div class="amount"><span class="number">{{$ticket->price}}</span><sup>Ks</sup> </div>
             
              <div>
              @role('User')

                <a href="#" class="btn btn-secondary px-4 py-2 buy"  data-id="{{$ticket->id}}" data-name="{{$ticket->name}}" data-price="{{$ticket->price}}" data-event="{{$ticket->event->name}}">Buy Ticket</a>
              @else
                <a href="{{route('loginform')}}" class="btn btn-secondary btn-block mainfullbtncolor">Please login </a>
              @endrole

              </div>
            </div>
          </div>

          @endforeach
          

          

        </div>
      </div>
    {{-- </div> --}}
    @endsection
    {{-- @section('script')
    <script type="text/javascript">
  $(document).ready(function(){
  //update_cart_count();
  
  $('.btn').click(function(){
    alert("hello");

  })
})
</script>
@endsection --}}