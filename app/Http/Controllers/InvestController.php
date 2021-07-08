<?php

namespace App\Http\Controllers;

use App\Models\Invest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class InvestController extends Controller
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
        return view('admin.invests.index',[
            'invests' => Invest::latest()->get(),
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
            'name'   => 'required',
            'image'  => 'required|image',
        ]);

         // Insert data in database
         $invests = Invest::create($request->except('_token') + ['created_at' => Carbon::now()] );

         // Upload Image
         $image     = $request->file('image');
         $filename  = $invests->id. '.' .$image->extension();
         $location  = public_path('uploads/invests/');
         $image->move($location , $filename);

         // Save Image name in the database
         $invests->image = $filename;

         // Save Everything in database 
         $invests->save();

          //Success message session
          return back()->withSuccess('Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function show(Invest $invest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function edit(Invest $invest)
    {
        return view('admin.invests.edit', compact('invest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invest $invest)
    {
         //form validation
         $request -> validate([
            'name'   => 'required',
            'image'  => 'image',
        ]);

        if ($request->has('image')) {

            // Delete existing image
            $existing = public_path('uploads/invests/' . $invest->image); 
            unlink($existing);

            // Upload Image
            $image     = $request->file('image');
            $filename  = $invest->id. '.' .$image->extension();
            $location  = public_path('uploads/invests/');
            $image->move($location , $filename);

            // Save Image name in the database
            $invest->image = $filename;
        }

        // Update Other Fields
        $invest->name   = $request->name;

         // Save Everything in database 
        $invest->save(); 

         // Return Back to Banner List With Success Session Message

        return redirect()->route('invests.index')->withSuccess('Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invest $invest)
    {
        // Remove Logo from server 
        $existing = public_path('uploads/invests/' . $invest->image);
        unlink($existing); 

        // Delete from database
        $invest->delete(); 

        // Return success message after deletion 
        return back()->withSuccess('Deleted successfully');
    }
}
