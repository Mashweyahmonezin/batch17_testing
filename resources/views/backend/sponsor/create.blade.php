@extends('backend.main')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Sponsor Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('sponsors.store')}}" method="post" enctype="multipart/form-data">
			      @csrf
			      
			       
			      

			      <div class="row form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
				<label class="col-md-1 form-control-label">Photo</label>
				<div class="col-md-6">
					<input type="file" name="photo"  class="form-control" value="">
					<img src="{{-- {{asset($venue->photo)}} --}}" class="img-fluid">
					
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