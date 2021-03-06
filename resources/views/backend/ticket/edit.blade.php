@extends('backend.master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Ticket Edit Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('tickets.update',$ticket->id)}}" method="post" enctype="multipart/form-data">
			      @csrf
			      @method('PUT')
			      
			       
			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$ticket->name}}">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>

			       <div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Price</label>
			        <div class="col-sm-5">
			          <input type="integer" class="form-control" id="inputName" name="price" value="{{$ticket->price}}">
			          <span class="text-danger">{{ $errors->first('price') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('venue_id') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Event Name</label>
			        <div class="col-sm-5">

			          <select name="event" id="category" class="form-control">
			          	<optgroup label="Choose Category">
					      @foreach($events as $event)
					        <option value="{{$event->id}}" @if($event->id == $ticket->event_id) {{'selected'}} @endif >{{$event->name}}</option>
					      @endforeach 
					    </optgroup>
			          </select>

			          <span class="text-danger">{{ $errors->first('category') }}</span>
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