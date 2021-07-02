<?php

namespace App\Http\Controllers;

use App\Models\workStep;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class WorkStepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.worksteps.index',[
            'worksteps' => workStep::latest()->get(),
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
            'description' => 'required',
            'image'       => 'required|image',
        ]);

        $steps = workStep::create($request->except('_token') + ['created_at' => Carbon::now()]);

        // Upload Image
        $image    = $request->file('image');
        $filename = $steps->id. '.' .$image->extension();
        $location = public_path('uploads/worksteps/');
        $image->move($location, $filename); 

        // Save Image name in the database 
        $steps->image = $filename; 
        $steps->save();
           
        return back()->withSuccess('Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\workStep  $workStep
     * @return \Illuminate\Http\Response
     */
    public function show(workStep $workStep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\workStep  $workStep
     * @return \Illuminate\Http\Response
     */
    public function edit(workStep $workStep)
    {
        return view('admin.worksteps.edit', compact('workStep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\workStep  $workStep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, workStep $workStep)
    {
         // Update Validation 
         $request->validate([
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'image',
        ]);

         // Check if request has image 
        if($request->has('image'))
        {
              // Delete existing image
            $existing = public_path('uploads/worksteps/' . $workStep->image); 
            unlink($existing);
              
             // Upload new image 
            $image    = $request->file('image');
            $filename = $workStep->id. '.' .$image->extension();
            $location = public_path('uploads/worksteps/');
            $image->move($location, $filename);  

              // Declare new name for saving in database 
            $workStep->image = $filename; 
        } 

        // Update Other Fields
        $workStep->title        = $request->title;
        $workStep->description  = $request->description; 

         // Save Everything in database 
        $workStep->save(); 

         // Return Back to Banner List With Success Session Message

        return redirect()->route('workSteps.index')->withSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\workStep  $workStep
     * @return \Illuminate\Http\Response
     */
    public function destroy(workStep $workStep)
    {
         // Remove Image from server 
         $existing = public_path('uploads/worksteps/' . $workStep->image);
         unlink($existing); 
 
         // Delete from database
         $workStep->delete(); 
 
         // Return success message after deletion 
         return back()->withSuccess('Deleted successfully');
    }
}
