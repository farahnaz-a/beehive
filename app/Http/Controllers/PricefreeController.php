<?php

namespace App\Http\Controllers;

use App\Models\Pricefree;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PricefreeController extends Controller
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
        return view('admin.pricefrees.index',[
            'pricefrees' => Pricefree::latest()->get(),
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
            'title'     => 'required',
            'features'  => 'required',
        ]);

        $pricefree_all = Pricefree::all();

        if($pricefree_all->count() == 0){

            Pricefree::create($request->except('_token') + ['created_at' => Carbon::now()]);

            return back()->withSuccess('Aded Successfully');
        }

        else{
            return back()->withWarning('Please edit or delete your existing data in order to add new');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pricefree  $pricefree
     * @return \Illuminate\Http\Response
     */
    public function show(Pricefree $pricefree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pricefree  $pricefree
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricefree $pricefree)
    {
        return view('admin.pricefrees.edit', compact('pricefree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pricefree  $pricefree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricefree $pricefree)
    {
        $request -> validate([
            'title'     => 'required',
            'features'  => 'required',
        ]);

        // Update Other Fields
        $pricefree->title     = $request->title;
        $pricefree->features  = $request->features;

         // Save Everything in database 
        $pricefree->save(); 

         // Return Back to Banner List With Success Session Message

        return redirect()->route('pricefrees.index')->withSuccess('Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pricefree  $pricefree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricefree $pricefree)
    {
         // Delete from database
         $pricefree->delete(); 
 
         // Return success message after deletion 
         return back()->withSuccess('Deleted successfully');
    }
}
