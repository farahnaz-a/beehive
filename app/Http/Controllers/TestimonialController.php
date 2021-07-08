<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
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
        return view('admin.testimonials.index',[
            'testimonials' => Testimonial::latest()->get(),
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
         //form validation
         $request -> validate([
            'name'         => 'required',
            'profession'   => 'required',
            'description'  => 'required',
            'image'        => 'required|image',
            'logo'         => 'required|image',
        ]);

         // Insert data in database
         $testimonials = Testimonial::create($request->except('_token') + ['created_at' => Carbon::now()] );

         // Upload Image
         $image     = $request->file('image');
         $filename  = $testimonials->id. '.' .$image->extension();
         $location  = public_path('uploads/testimonials/');
         $image->move($location , $filename);

         // Save Image name in the database
         $testimonials->image = $filename;


        // Upload Logo
         $logo     = $request->file('logo');
         $filename_logo  = $testimonials->id. '_logo.' .$logo->extension();
         $location_logo = public_path('uploads/testimonials/');
         $logo->move($location_logo , $filename_logo);

         // Save Image name in the database
         $testimonials->logo = $filename_logo;


         // Save Everything in database 
         $testimonials->save();

         //Success message session
         return back()->withSuccess('Added Successfully');
        //  return redirect()->route('testimonials.index')->withSuccess('Added Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
         //form validation
         $request -> validate([
            'name'         => 'required',
            'profession'   => 'required',
            'description'  => 'required',
            'image'        => 'image',
            'logo'         => 'image',
        ]);

        
        if ($request->has('image')) {

            // Delete existing image
            $existing = public_path('uploads/testimonials/' . $testimonial->image); 
            unlink($existing);

            // Upload Image
            $image     = $request->file('image');
            $filename  = $testimonial->id. '.' .$image->extension();
            $location  = public_path('uploads/testimonials/');
            $image->move($location , $filename);

            // Save Image name in the database
            $testimonial->image = $filename;

        }


         if ($request->has('logo')) {

             // Delete existing image
            $existing_logo = public_path('uploads/testimonials/' . $testimonial->logo); 
            unlink($existing_logo);

            // Upload Logo
            $logo     = $request->file('logo');
            $filename_logo  = $testimonial->id. '_logo.' .$logo->extension();
            $location_logo = public_path('uploads/testimonials/');
            $logo->move($location_logo , $filename_logo);

            // Save Image name in the database
            $testimonial->logo = $filename_logo;

         }


        // Update Other Fields
        $testimonial->name         = $request->name;
        $testimonial->profession   = $request->profession;
        $testimonial->description  = $request->description; 

         // Save Everything in database 
        $testimonial->save(); 

         // Return Back to Banner List With Success Session Message

        return redirect()->route('testimonials.index')->withSuccess('Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
         // Remove Image from server 
         $existing = public_path('uploads/testimonials/' . $testimonial->image);
         unlink($existing); 

         // Remove Logo from server 
         $existing_logo = public_path('uploads/testimonials/' . $testimonial->logo);
         unlink($existing_logo); 
 
         // Delete from database
         $testimonial->delete(); 
 
         // Return success message after deletion 
         return back()->withSuccess('Deleted successfully');
    }
}
