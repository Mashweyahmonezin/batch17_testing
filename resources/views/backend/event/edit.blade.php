@extends('backend.master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Event Edit Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('events.update',$event->id)}}" method="post" enctype="multipart/form-data">
			      @csrf
			      @method('PUT')
			      
			       
			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$event->name}}">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('date') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Date</label>
			        <div class="col-sm-5">
			          <input type="date" class="form-control" id="inputDate" name="date" value="{{$event->Date}}">
			          <span class="text-danger">{{ $errors->first('date') }}</span>
			        </div>
			      </div>

			      

			      <div class="form-group row {{ $errors->has('start_time') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Start_time</label>
			        <div class="col-sm-5">
			          <input type="integer" class="form-control" id="inputDate" name="start_time" value="{{$event->start_time}}">
			          <span class="text-danger">{{ $errors->first('time') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('end_time') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">End_time</label>
			        <div class="col-sm-5">
			          <input type="integer" class="form-control" id="inputDate" name="end_time" value="{{$event->end_time}}">
			          <span class="text-danger">{{ $errors->first('time') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('venue_id') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Venue_id</label>
			        <div class="col-sm-5">

			          <select name="venue" id="category" class="form-control">
			          	<optgroup label="Choose Category">
					      @foreach($venues as $venue)
					        <option value="{{$venue->id}}" @if($venue->id == $event->venues_id) {{'selected'}} @endif >{{$venue->name}}</option>
					      @endforeach 
					    </optgroup>
			          </select>

			          <span class="text-danger">{{ $errors->first('category') }}</span>
			        </div>
			      </div>

			      <div class="row form-group {{ $errors->has('start_time') ? 'has-error' : '' }}">
				<label class="col-md-1 form-control-label">Photo</label>
				<div class="col-md-6">
					<input type="file" name="photo"  class="form-control" value="{{$event->photo}}">
					<img src="{{asset($event->photo)}}" class="img-fluid">
					<input type="hidden" name="oldphoto" value="{{asset($event->photo)}}">
				</div>
				</div>



			     

			     
			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Update">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection