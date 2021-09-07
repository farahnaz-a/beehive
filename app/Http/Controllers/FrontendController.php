<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\City;
use App\Models\Work;
use App\Models\Brick;
use App\Models\Banner;
use App\Models\Invest;
use App\Models\workStep;
use App\Models\Portfolio;
use App\Models\Pricefree;
use App\Models\Testimonial;
use App\Models\Pricepremium;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   /**
    *  Home Page
    */
   public function index()
   {
      $skip  = ceil(Faq::count()/2);
      $limit = ceil(Faq::count() - $skip);

      $lyonn = City::where('name', 'Lyon')->first();
      $pa    = City::where('name', 'Paris')->first();
      $marseille = City::where('name', 'Marseille')->first();
      $bordeaux  = City::where('name', 'Bordeaux')->first();
      $paris      = Portfolio::where('city_name', $pa->id)->get();
      $lyon       = Portfolio::where('city_name', $lyonn->id)->get();
      $mars       = Portfolio::where('city_name', $marseille->id)->get();
      $bors       = Portfolio::where('city_name', $bordeaux->id)->get();
      return view('frontend.index', [
         'banners'    => Banner::all(),
         'works'      => Work::first(),
         'worksteps'  => workStep::all(),
         'paris'      => $paris,
         'lyon'       => $lyon,
         'mars'       => $mars,
         'bors'       => $bors,
         'testimonial'=> Testimonial::first(),
         'free'       => Pricefree::first(),
         'premium'    => Pricepremium::first(),
         'faqshalf'   => Faq::take($skip)->get(),
         'faqsfull'   => Faq::skip($skip)->take($limit)->get(),
         'invests'    => Invest::all(),
         'cities'     => City::all(),
      ]);
   }

   /**
    * Project Details 
    */
   public function details($id)
   {
      $data = Portfolio::find($id); 
      $invests    = Invest::all();
      $cities     = City::all();
      $bricks     = Brick::where('portfolio_id', $data->id)->get();
      return view('frontend.details', compact('data', 'invests', 'cities', 'bricks'));
   }

   /**
    *  Make Deposit
    */
   public function makeDeposit()
   {
      return view('frontend.deposit');
   }

   /**
    *  City Details 
    */
   public function cityDetails($country, $name)
   {
      $data = City::where('name', $name)->first(); 
      $lyonn = City::where('name', 'Lyon')->first();
      $pa    = City::where('name', 'Paris')->first();
      $marseille = City::where('name', 'Marseille')->first();
      $bordeaux  = City::where('name', 'Bordeaux')->first();
      $paris      = Portfolio::where('city_name', $pa->id)->get();
      $lyon       = Portfolio::where('city_name', $lyonn->id)->get();
      $mars       = Portfolio::where('city_name', $marseille->id)->get();
      $bors       = Portfolio::where('city_name', $bordeaux->id)->get();
      return view('frontend.citydetails', compact('data', 'paris', 'lyon', 'mars', 'bors'));
   }

// END   
}
