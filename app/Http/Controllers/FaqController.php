<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FaqController extends Controller
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
        return view('admin.faqs.index',[
            'faqs' => Faq::latest()->get(),
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
            'question' => 'required|unique:faqs',
            'answer'   => 'required',
        ]);

        Faq::create($request->except('_token') + ['created_at' => Carbon::now()]);

        return back()->withSuccess('Aded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $request -> validate([
            'question' => 'required|unique:faqs',
            'answer'   => 'required',
        ]);

        // Update Other Fields
        $faq->question   = $request->question;
        $faq->answer     = $request->answer;

         // Save Everything in database 
        $faq->save(); 

         // Return Back to Banner List With Success Session Message

        return redirect()->route('faqs.index')->withSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        // Delete from database
        $faq->delete(); 
 
        // Return success message after deletion 
        return back()->withSuccess('Deleted successfully');
    }
}
