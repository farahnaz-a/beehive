<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   /**
    *  Home Page
    */
   public function index()
   {
      return view('frontend.index', [
         'banners' => Banner::all(),
      ]);
   }

// END   
}
