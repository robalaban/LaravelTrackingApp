<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Packages extends Controller 
{
		// getPackage(\App\Package) to return the Package object
    public function getPackage(\App\Packages $package)
    {
    	return $package;
    }
}
