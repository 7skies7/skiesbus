@extends('layouts.master')

@section('content')

  <div class="row justify-content-md-center">
    <div class="col-md-12">
        <div class="card  mt-20">
            <div class="card-body">
            
            @if(session('success'))
            	<div class="alert alert-success alert-dismissible fade show">{{ session('success')}}
            	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
  				</div>
            @endif

            @if(session('error'))
            	<div class="alert alert-danger alert-dismissible fade show">{{ session('error')}}
               	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
  				</div>
            @endif
            <div class="card-title ml-auto">
            <h4 class="text-center">Routes</h4><a href="{{route('addRoute')}}" class="btn btn-primary">Add New Route</a></div>
            <!-- <h6 class="card-subtitle mb-2 text-muted">Search, Compare and Book Bus</h6> -->
            <div class="card-text mx-auto">

			<table class="table table-bordered text-center">
			  	<thead class="text-center">
			    	<tr>
			      		<th>Route Name</th>
			      		<th>Source</th>
			      		<th>Destination</th>
			      		<th>Actions</th>
			    	</tr>
			  </thead>
			  <tbody>
			  		@foreach($routes as $route)
			    	<tr>
			      		<td>{{$route->route_name}}</td>
			      		<td>{{$route->city_from}}</td>
			      		<td>{{$route->city_to}}</td>
			      		<td><a href="/routes/{{$route->id}}/delete" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-trash"></i>Delete</a></td>
			    	</tr>
			    	@endforeach
			  </tbody>
			</table>
            
            </div>
        </div>
    </div>

  </div>
      
@endsection
