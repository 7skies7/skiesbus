<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Bus extends Model
{
    //

    protected $table = 'buses';

    protected $guarded = ['_token'];

    public function routes()
    {
    	return $this->belongsTo(Routes::class);
    }

    public function getBuses()
    {
    	return DB::select( DB::raw('select b.id,b.bus_name, concat("B",b.id) as bus_no, b.bus_datetime, 								b.bus_seats,r.route_name from buses b
						inner join routes r on r.id = b.bus_route;'));
    }
}
