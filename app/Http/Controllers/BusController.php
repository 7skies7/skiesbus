<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use DB;
use App\Route;
class BusController extends Controller
{
    //

    public function index()
    {
    	$buses = (new Bus)->getBuses();
    					
    	return view('buses.index',compact('buses'));
    }

    public function create()
    {

        $routes = Route::select('id','route_name')->get()->toArray();
        $busid = 1;
        if(Bus::orderBy('id','desc')->first())
        {
            $busid = Route::orderBy('id','desc')->first()->id;
        }
        
        return view('buses.create',compact('busid','routes'));
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
