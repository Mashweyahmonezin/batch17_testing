@extends('backend.main')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Event Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('events.store')}}" method="post">
			      @csrf
			      
			       
			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>

			       <div class="form-group row {{ $errors->has('date') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Date</label>
			        <div class="col-sm-5">
			          <input type="date" class="form-control" id="inputDate" name="date">
			          <span class="text-danger">{{ $errors->first('date') }}</span>
			        </div>
			      </div>


			      <div class="form-group row {{ $errors->has('start_time') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Start_time</label>
			        <div class="col-sm-5">
			          <input type="integer" class="form-control" id="inputDate" name="start_time">
			          <span class="text-danger">{{ $errors->first('time') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('end_time') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">End_time</label>
			        <div class="col-sm-5">
			          <input type="integer" class="form-control" id="inputDate" name="end_time">
			          <span class="text-danger">{{ $errors->first('time') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('venue') ? 'has-error' : '' }}">
			        <label for="inputPhoto" class="col-sm-2 col-form-label">Venue</label>
			        <div class="col-sm-5">
			          <select name="venue" id="category" class="form-control">
			          	<optgroup label="Choose Venue">
					      @foreach($venues as $venue)
					        <option value="{{$venue->id}}">{{$venue->name}}</option>
					      @endforeach 
					    </optgroup>
			          </select>
			          <span class="text-danger">{{ $errors->first('venue') }}</span>
			        </div>
			      </div>


					

			     
			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Create">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection