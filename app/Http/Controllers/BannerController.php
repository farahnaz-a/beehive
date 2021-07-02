<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use CreateBannersTable;
use Illuminate\Http\Request;

class BannerController extends Controller
{

     /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banners.index' ,[
            'banners' => Banner::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title'       =>'required',
            'subtitle'    => 'required',
            'description' => 'required',
            'image'       => 'required|image',
        ]);

        $banner_all = Banner::all();

        if($banner_all->count() == 0){

            $banners = Banner::create($request->except('_token') + ['created_at' => Carbon::now()]);

           // Upload Image
            $image    = $request->file('image');
            $filename = $banners->id. '.' .$image->extension();
            $location = public_path('uploads/banners/');
            $image->move($location, $filename); 

            // Save Image name in the database 
            $banners->image = $filename; 
            $banners->save();
           
            return back()->withSuccess('Added Successfully');
        }

        else{
             return back()->withWarning('Please edit or delete your existing data in order to add new');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
          // Update Validation 
          $request->validate([
            'title'       => 'required',
            'subtitle'    => 'required',
            'description' => 'required',
            'image'       => 'image',
        ]);

         // Check if request has image 
        if($request->has('image'))
        {
              // Delete existing image
            $existing = public_path('uploads/banners/' . $banner->image); 
            unlink($existing);
              
             // Upload new image 
            $image    = $request->file('image');
            $filename = $banner->id. '.' .$image->extension();
            $location = public_path('uploads/banners/');
            $image->move($location, $filename);  

              // Declare new name for saving in database 
            $banner->image = $filename; 
        } 

        // Update Other Fields
        $banner->title        = $request->title;
        $banner->subtitle     = $request->subtitle;
        $banner->description  = $request->description; 

         // Save Everything in database 
        $banner->save(); 

         // Return Back to Banner List With Success Session Message

        return redirect()->route('banners.index')->withSuccess('Banner updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
         // Remove Image from server 
         $existing = public_path('uploads/banners/' . $banner->image);
         unlink($existing); 
 
         // Delete from database
         $banner->delete(); 
 
         // Return success message after deletion 
         return back()->withSuccess('Banner deleted successfully');
    }
}
