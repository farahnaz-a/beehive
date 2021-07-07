<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Portfolio;
use App\Models\Work;
use App\Models\workStep;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   /**
    *  Home Page
    */
   public function index()
   {
      return view('frontend.index', [
         'banners'    => Banner::all(),
         'works'      => Work::first(),
         'worksteps'  => workStep::all(),
         // 'paris'   => Portfolio::where('city_name', 'Paris')->get(),
      ]);
   }

// END   
}
