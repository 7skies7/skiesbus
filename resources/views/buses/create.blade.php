@extends('layouts.master')

@section('content')

  <div class="row justify-content-md-center">
    <div class="col-md-8">
        <div class="card  mt-20">
            <div class="card-body">
            
            <div class="card-title ml-auto">
            <h4 class="text-center">Buses</h4><a href="{{route('buses')}}" class="btn btn-primary">All Buses</a></div>
            <!-- <h6 class="card-subtitle mb-2 text-muted">Search, Compare and Book Bus</h6> -->
            <div class="card-text mx-auto">

            	<form method="POST" action="{{route('saveBus')}}">
            		{{ csrf_field() }}


				  	<div class="form-group">
				    	<label for="bus_name">Bus Name</label>
				    	<input class="form-control" id="bus_name" name="bus_name" placeholder="Add Bus Name">
				    
				    </div>

				  	<div class="form-group">
				    	<label for="bus_route">Select Route</label>
				    	<select class="form-control" id="bus_route" name="bus_route">
				      		<option>Select Route</option>
				      		@foreach($routes as $route)
				      			<option value="{{$route['id']}}">{{ $route['route_name'] }}</option>
				      		@endforeach
				    	</select>
				    </div>

				  	<div class="form-group">
				    	<label for="bus_seats">Bus Seats</label>
				    	<input class="form-control" readonly="" value="49" id="bus_seats" name="bus_seats" placeholder="Add Bus Name">
				    </div>

				    <div class="form-group">
				    	<input class="form-control" id="datetimepicker" name="bus_datetime" placeholder="Select Date and Time">
		
                    
				    </div>
				    
				    <div class="form-group text-center">
				    	<input type="hidden" class="form-control" value="{{$busid}}" id="busid" name="busid">
				    	<input type="submit" class="btn btn-primary " value="Save Bus">
				    </div>
				</form>
            
            </div>
        </div>
    </div>

  </div>
      
@endsection

@section('script')

<script type="text/javascript">
   
    $(function () {
   		$(document).ready(function(){
   			$("#datetimepicker").flatpickr();
   		});
        
    });
</script>

@endsection