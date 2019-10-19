<?php

namespace app\Myfacades\Facades;

use Illuminate\Support\Facades\Facade;

class LocationFacades extends Facade {
	protected static function getFacadeAccessor() 
	{
		 return 'location';
	}
}