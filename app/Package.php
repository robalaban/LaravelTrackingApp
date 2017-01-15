<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{

	// Override getRouteKeyName/{id} form Model so we can search
	// directly for trackingCode 
	public function getRouteKeyName()
	{
		return 'trackingCode';
	}
}