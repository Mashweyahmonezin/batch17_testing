@extends('frontend.master')
@section('content')

 <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up">
            <form action="#">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="p-4 mb-3">
              <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Address</p>
              <p class="mb-4">Keng Tung,Shan State</p>

              <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Phone</p>
              <p class="mb-4"><a href="#">09458032861</a></p>

              <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Email Address</p>
              <p class="mb-0"><a href="#">shweyahmone84@gmail.com</a></p>

            </div>
          </div>
        </div>
      </div>
    </div>

@endsection