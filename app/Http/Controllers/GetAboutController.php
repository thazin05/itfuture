<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Http\Controllers\Controller;

class GetAboutController extends Controller
{
    public function index()
    {
    	$title = 'About Us';
    	$description = 'What makes our development great?';
    	$abouts = About::all();
    	return view('about-us',compact('abouts','title', 'description'));
    }
}
