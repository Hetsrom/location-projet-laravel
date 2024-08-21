<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{

   public function home()
   {
    return view('locations.home');
   }

   public function show()
   {
    return view('locations.about');
   }
   public function dashboard()
   {
    return view('locations.dashboard');
   }//
}
