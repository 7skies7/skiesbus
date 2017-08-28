<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use DB;
use App\City;
class RouteController extends Controller
{
    //

    public function index()
    {
    	$routes = (new Route)->getRoutes();
    					
    	return view('routes.index',compact('routes'));
    }

    public function create()
    {
      
        $routeid = 1;
        if(Route::orderBy('id','desc')->first() )
        {
            $routeid = Route::orderBy('id','desc')->first()->id;
        }
        
        $cities = City::select('id','city_name')->orderBy('city_name')->get()->toArray();
        
        return view('routes.create',compact('cities','routeid'));
    }

    public function store(Request $request)
    {
        
    
        $route = new Route;
        $route->route_name = 'RT'.request()->route_id.'_'.City::find(request()->route_from)->city_name.'_'.City::find(request()->route_to)->city_name;
        $route->route_from = request()->route_from;
        $route->route_to = request()->route_to;
        if($route->save())
        {
            return redirect('routes')->with('success','Route has been added successfully.');
        }else{
            return redirect('routes')->with('error','Route could not be added.');

        }
    }

    public function delete($routeid)
    {
       
        if(Route::destroy($routeid))
        {
            return redirect('routes')->with('success','Route has been deleted successfully.');
        }else{
            return redirect('routes')->with('error','Route could not be deleted.');

        }
    }
}
