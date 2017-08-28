<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Route extends Model
{
    //

    protected $table = 'routes';

    protected $guarded = ['_token'];
    public function cities()
    {
    	return $this->belongsTo(City::class);
    }

    public function getRoutes()
    {
    	return DB::select( DB::raw('select c.city_name as city_from, ct.city_name as city_to, r.route_name,r.id
				from routes r
				inner join cities c on c.id = r.route_from
				inner join cities ct on ct.id = r.route_to'));
    }
}
