<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
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
        return view('admin.portfolios.index',[
            'portfolios' => Portfolio::latest()->get()
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
            'title'      =>'required',
            'price'      => 'required',
            'minititle'  =>'required',
            'miniprice'  => 'required',
            'image'      => 'required|image',
            'city_name'  => 'required',
        ]);

        $portfolio = Portfolio::create($request->except('_token') + ['created_at' => Carbon::now()]);

        // Upload Image
        $image    = $request->file('image');
        $filename = $portfolio->id. '.' .$image->extension();
        $location = public_path('uploads/portfolios/');
        $image->move($location, $filename); 

        // Save Image name in the database 
        $portfolio->image = $filename; 
        $portfolio->save();
           
        return back()->withSuccess('Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
         // Update Validation 
         $request -> validate([
            'title'      =>'required',
            'price'      => 'required',
            'minititle'  =>'required',
            'miniprice'  => 'required',
            'image'      => 'image',
            'city_name'  => 'required',
        ]);

         // Check if request has image 
        if($request->has('image'))
        {
              // Delete existing image
            $existing = public_path('uploads/portfolios/' . $portfolio->image); 
            unlink($existing);
              
             // Upload new image 
            $image    = $request->file('image');
            $filename = $portfolio->id. '.' .$image->extension();
            $location = public_path('uploads/portfolios/');
            $image->move($location, $filename);  

              // Declare new name for saving in database 
            $portfolio->image = $filename; 
        } 

        // Update Other Fields
        $portfolio->title      = $request->title;
        $portfolio->price      = $request->price; 
        $portfolio->minititle  = $request->minititle;
        $portfolio->miniprice  = $request->miniprice; 

         // Save Everything in database 
        $portfolio->save(); 

         // Return Back to Banner List With Success Session Message

        return redirect()->route('portfolios.index')->withSuccess('Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        // Remove Image from server 
        $existing = public_path('uploads/portfolios/' . $portfolio->image);
        unlink($existing); 

        // Delete from database
        $portfolio->delete(); 

        // Return success message after deletion 
        return back()->withSuccess('Deleted successfully');
    }
}
