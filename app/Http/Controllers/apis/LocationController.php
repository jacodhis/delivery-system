<?php

namespace App\Http\Controllers\apis;

use App\Models\Location;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function index(){
        return Location::get();
    }
}
