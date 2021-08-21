<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\City;
use BaconQrCode\Renderer\Path\Move;
use Illuminate\Http\Request;

class CityController extends Controller
{
     /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('checkrole');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cities.index',[
            'cities' => City::latest()->get(),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //form validation
            $request -> validate([
                'country'        => 'required',
                'name'           => 'required',
                'region'         => 'required',
                'title'          => 'required',
                'description_1'  => 'required',
                'image'          => 'image|required',
                'slider_image'   => 'image|required',
            ]);

             // Insert data in database
             $cities = City::create($request->except('_token') + ['created_at' => Carbon::now()] );
    
             
             //uplpad Image
             $image = $request->file('image');
             $filename = $cities->id. '.' .$image->extension();
             $location = public_path('uploads/cities/');
             $image->move($location, $filename); 


             //uplpad Slider Image
             $slider_image = $request->file('slider_image');
             $slider_filename = $cities->id. '.slider.' .$slider_image->extension();
             $slider_location = public_path('uploads/cities/');
             $slider_image->move($slider_location, $slider_filename); 

             // Save Image name in the database 
             $cities->image        = $filename; 
             $cities->slider_image = $slider_filename; 

             //Save everything in database
             $cities->save();
           

            //Success message session
             return back()->withSuccess('Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        return view('admin.cities.show', compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        return view('admin.cities.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        // Form validation
        $request -> validate([
            'country'        => 'required',
            'name'           => 'required',
            'region'         => 'required',
            'title'          => 'required',
            'description_1'  => 'required',
            'image'          => 'image',
            'slider_image'   => 'image',
        ]);

        if($request->has('image')){

            // Delete Existing Image
            $existing = public_path('uploads/cities/'. $city->image);
            unlink($existing);

            // Upload Image
            $image       = $request->file('image');
            $filename    = $city->image. '.' .$image->extension();
            $location    = public_path('uploads/cities/');
            $image->move($location, $filename);

            // Save Image name in the database
            $city->image = $filename;
            
        }

        if($request->has('slider_image')){

            // Delete Existing Image
            $slider_existing = public_path('uploads/cities/'. $city->slider_image);
            unlink($slider_existing);

            //uplpad Slider Image
            $slider_image = $request->file('slider_image');
            $slider_filename = $city->id. '.slider.' .$slider_image->extension();
            $slider_location = public_path('uploads/cities/');
            $slider_image->move($slider_location, $slider_filename); 

            // Save Image name in the database
            $city->slider_image = $slider_filename;

        }
        
        // Update Fileds
        $city->country       = $request->country; 
        $city->name          = $request->name; 
        $city->region        = $request->region; 
        $city->title         = $request->title; 
        $city->description_1 = $request->description_1; 
        $city->description_2 = $request->description_2; 

        // Save Everything in Database
        $city->save(); 

        return redirect()->route('cities.index')->withSuccess('Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        // Delete Existing Image From Server
        $existing = public_path('uploads/cities/'. $city->image);
        unlink($existing);

        $slider_existing = public_path('uploads/cities/'. $city->slider_image);
        unlink($slider_existing);

        $city->delete(); 
        return redirect()->route('cities.index')->withSuccess('Deleted Successfully');
    }
}
