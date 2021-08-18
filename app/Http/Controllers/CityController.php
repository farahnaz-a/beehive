<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\City;
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
                'name'           => 'required',
                'region_paca'    => 'required',
                'title'          => 'required',
                'description_1'  => 'required',
                'image'          => 'image|required',
            ]);
    

            // $table->string('region_paca'); 
            // $table->string('title'); 
            // $table->longText('description_1'); 
            // $table->longText('description_2')->nullable(); 
            // $table->string('image'); 

             // Insert data in database
             $cities = City::create($request->except('_token') + ['created_at' => Carbon::now()] );
    

             //uplpad Image
             $image = $request->file('image');
             $filename = $cities->id. '.' .$image->extension();
             $location = public_path('uploads/cities/');
             $image->move($location, $filename); 

             // Save Image name in the database 
             $cities->image = $filename; 
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
        //
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
        $city->name = $request->name; 
        $city->save(); 

        return redirect()->route('cities.index')->withSuccess('City updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete(); 
        return back()->withSuccess('City deleted');
    }
}
