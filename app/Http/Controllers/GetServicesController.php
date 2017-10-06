<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;

class GetServicesController extends Controller
{
    public function index()
    {
    	return view('services');
    }
}
