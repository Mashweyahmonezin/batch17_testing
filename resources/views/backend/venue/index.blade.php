@extends('backend.main')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Venue List</h1>
    		<a href="{{route('venues.create')}}" class="btn btn-info float-right"><i class="fas fa-plus"></i>Add New</a>
  		</div>
  	</div>
    
     <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Name</th>
                       <th>Address</th>
                       <th>Photo</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
                    @php $i=1; @endphp
                    @foreach($venues as $venue)
    				<tr>
                        <td>{{$i++}}</td>    
                        <td>{{$venue->name}}</td>            
                        <td>{{$venue->address}}</td>
                        <td>{{$venue->photo}}</td>
                        <td>
                            
                            <a href="{{route('venues.edit',$venue->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>

                             <form action="{{route('venues.destroy',$venue->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure delete!')">
                                @csrf
                                @method('DELETE')
                                <!-- delete lote yin method ka post nat ma ya buu dar kout method ko delete so pe change pay ya mal update lo myoe pot -->
                                <button class="btn btn-outline-danger "><i class="fas fa-trash"></i></button>
                            </form>
                        </td>            

                    </tr>
                    @endforeach
    			</tbody>
    		</table>
    	</div>
    </div>
 
 	</div>
@endsection