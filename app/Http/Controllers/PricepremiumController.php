<?php

namespace App\Http\Controllers;

use App\Models\Pricepremium;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PricepremiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pricepremiums.index',[
            'pricepremiums' => Pricepremium::latest()->get(),
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
            'price'     => 'required|numeric',
        ]);

        $pricepremium_all = Pricepremium::all();

        if($pricepremium_all->count() == 0){

            Pricepremium::create($request->except('_token') + ['created_at' => Carbon::now()]);

            return back()->withSuccess('Aded Successfully');
        }

        else{
            return back()->withWarning('Please edit or delete your existing data in order to add new');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pricepremium  $pricepremium
     * @return \Illuminate\Http\Response
     */
    public function show(Pricepremium $pricepremium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pricepremium  $pricepremium
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricepremium $pricepremium)
    {
        return view('admin.pricepremiums.edit', compact('pricepremium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pricepremium  $pricepremium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricepremium $pricepremium)
    {
        $request -> validate([
            'title'     => 'required',
            'price'     => 'required|numeric',
            'features'  => 'required',
        ]);

        // Update Fields
        $pricepremium->title     = $request->title;
        $pricepremium->price     = $request->price;
        $pricepremium->features  = $request->features;

         // Save Everything in database 
        $pricepremium->save(); 

         // Return Back to Banner List With Success Session Message

        return redirect()->route('pricepremiums.index')->withSuccess('Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pricepremium  $pricepremium
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricepremium $pricepremium)
    {
        // Delete from database
        $pricepremium->delete(); 
 
        // Return success message after deletion 
        return back()->withSuccess('Deleted successfully');
    }
}
