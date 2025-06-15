<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
 public function index()
 {
     // This method can be used to return a view or data for the frontend
     return view('frontEnd.layouts.pages.index'); // Adjust the path as necessary
       
 }
}
