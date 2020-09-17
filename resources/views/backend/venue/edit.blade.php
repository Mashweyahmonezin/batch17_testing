@extends('backend.master')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Venue Edit Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('venues.update',$venue->id)}}" method="post" enctype="multipart/form-data">
			      @csrf
			      @method('PUT')
			      
			       
			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$venue->name}}">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('address') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Address</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="address" value="{{$venue->address}}">
			          <span class="text-danger">{{ $errors->first('address') }}</span>
			        </div>
			      </div>

			      <div class="row form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
				<label class="col-md-1 form-control-label">Photo</label>
				<div class="col-md-6">
					<input type="file" name="photo"  class="form-control" value="">
					<img src="{{asset($venue->photo)}}" class="img-fluid">
					<input type="hidden" name="oldphoto" value="{{-- {{asset($vanue->photo)}} --}}">
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