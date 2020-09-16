@extends('backend.main')
@section('content')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="row">
			<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Ticket Create Form</h1>
    		<a href="{{route('tickets.index')}}" class="btn btn-info float-right ml-5"><i class="fa fa-angle-double-left"></i></a>
  		</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('tickets.store')}}" method="post">
					@csrf


					<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="inputName" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="inputName" name="name">
							<span class="text-danger">{{ $errors->first('name') }}</span>
						</div>
					</div>

					<div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
						<label for="inputName" class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-5">
							<input type="integer" class="form-control" id="inputName" name="price">
							<span class="text-danger">{{ $errors->first('price') }}</span>
						</div>
					</div>

					<div class="form-group row">
						<label for="categoryName" class="col-sm-2 col-form-label">Event</label>
						<div class="col-sm-5">
							<div class="form-group">
								<select class="form-control custom-select" id="exampleFormControlSelect1" name="event" placeholder="Choose Event">
									<option>Choose Event</option>

									@foreach($events as $event)
									<option value="{{$event->id}}">{{$event->name}}</option>
									@endforeach
								</select>
							</div>
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