@extends('backend.main')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Sponsor List</h1>
    		<a href="{{route('sponsors.create')}}" class="btn btn-info float-right"><i class="fas fa-plus"></i>Add New</a>
  		</div>
  	</div>
    
     <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					
                       
                       <th>Photo</th>
    					
    				</tr>
    			</thead>
    			<tbody>
                    @php $i=1; @endphp
                    @foreach($sponsors as $sponsor)
    				<tr>
                        <td>{{$i++}}</td>    
                                   
                        
                        <td> <img src="{{asset($sponsor->photo)}}" width="300px" height="300px"> </td>  
                        <td>
                            
                            <a href="{{route('sponsors.edit',$sponsor->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>

                             <form action="{{route('sponsors.destroy',$spo->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure delete!')">
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