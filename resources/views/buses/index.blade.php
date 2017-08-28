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
            <h4 class="text-center page-header">Buses</h4><a href="{{route('addBus')}}" class="btn btn-primary">Add New Bus</a></div>
            <!-- <h6 class="card-subtitle mb-2 text-muted">Search, Compare and Book Bus</h6> -->
            <div class="card-text mx-auto">

			<table class="table table-bordered text-center">
			  	<thead class="text-center">
			    	<tr>
			    		<th>Bus No</th>
			      		<th>Bus Name</th>
			      		<th>Bus Route </th>
			      		<th>Bus Seats</th>
			      		<th>Bus Date Time</th>
			    	</tr>
			  </thead>
			  <tbody>
			  		@foreach($buses as $bus)
			    	<tr>
			      		<td>{{$bus->bus_no}}</td>
			      		<td>{{$bus->bus_name}}</td>
			      		<td>{{$bus->route_name}}</td>
			      		<td>{{$bus->bus_seats}}</td>
			      		<td>{{$bus->bus_datetime}}</td>
			      		<td><a href="/buses/{{$bus->id}}/delete" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-trash"></i>Delete</a></td>
			    	</tr>
			    	@endforeach
			  </tbody>
			</table>
            
            </div>
        </div>
    </div>

  </div>
      
@endsection
