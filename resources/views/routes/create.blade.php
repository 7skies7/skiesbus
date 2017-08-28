@extends('layouts.master')

@section('content')

  <div class="row justify-content-md-center">
    <div class="col-md-8">
        <div class="card  mt-20">
            <div class="card-body">
            
            <div class="card-title ml-auto">
            <h4 class="text-center">Routes</h4><a href="{{route('routes')}}" class="btn btn-primary">All Routes</a></div>
            <!-- <h6 class="card-subtitle mb-2 text-muted">Search, Compare and Book Bus</h6> -->
            <div class="card-text mx-auto">

            	<form method="POST" action="{{route('saveRoute')}}">
            		{{ csrf_field() }}

				  	<div class="form-group">
				    	<label for="route_from">Select Source</label>
				    	<select class="form-control" id="route_from" name="route_from">
				      		<option>Select Source</option>
				      		@foreach($cities as $city)
				      			<option value="{{$city['id']}}">{{ $city['city_name'] }}</option>
				      		@endforeach
				    	</select>
				    </div>
				    <div class="form-group">
				    	<label for="route_to">Select Destination</label>
				    	<select class="form-control" id="route_to" name="route_to">
				      		<option>Select Destination</option>
				      		@foreach($cities as $city)
				      			<option value="{{$city['id']}}">{{ $city['city_name'] }}</option>
				      		@endforeach
				    	</select>
				    </div>
				    <div class="form-group text-center">
				    	<input type="hidden" class="form-control" value="{{$routeid}}" id="route_id" name="route_id">
				    	<input type="submit" class="btn btn-primary " value="Save Route">
				    </div>
				</form>
            
            </div>
        </div>
    </div>

  </div>
      
@endsection
