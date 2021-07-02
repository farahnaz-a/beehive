<?php

namespace App\Http\Controllers;

use App\Models\Work;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.works.index',[
            'works' => Work::latest()->get(),
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
            'title'        => 'required',
            'subtitle'     =>'required',
            'description'  => 'required',
            'image'        => 'required|image',
        ]);

        $work_all = Work::all();

        if($work_all->count() == 0){

            $works = Work::create($request->except('_token') + ['created_at' => Carbon::now()]);

           // Upload Image
            $image    = $request->file('image');
            $filename = $works->id. '.' .$image->extension();
            $location = public_path('uploads/works/');
            $image->move($location, $filename); 

            // Save Image name in the database 
            $works->image = $filename; 
            $works->save();
           
            return back()->withSuccess('Added Successfully');
        }

        else{
             return back()->withWarning('Please edit or delete your existing data in order to add new');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('admin.works.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
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
            $existing = public_path('uploads/works/' . $work->image); 
            unlink($existing);
              
             // Upload new image 
            $image    = $request->file('image');
            $filename = $work->id. '.' .$image->extension();
            $location = public_path('uploads/works/');
            $image->move($location, $filename);  

              // Declare new name for saving in database 
            $work->image = $filename; 
        } 

        // Update Other Fields
        $work->title        = $request->title;
        $work->subtitle     = $request->subtitle;
        $work->description  = $request->description; 

         // Save Everything in database 
        $work->save(); 

         // Return Back to Banner List With Success Session Message

        return redirect()->route('works.index')->withSuccess('Work updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        
         // Remove Image from server 
         $existing = public_path('uploads/works/' . $work->image);
         unlink($existing); 
 
         // Delete from database
         $work->delete(); 
 
         // Return success message after deletion 
         return back()->withSuccess('Deleted successfully');
    }
}
