<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\PortfolioImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

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
            'portfolios' => Portfolio::latest()->get(),
        ]);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create',[
            'cities'     => City::all(),
        ]);
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
            'country'            => 'required',
            'city_name'          => 'required',
            'image'              => 'image|required|max:500000',
            'title'              => 'required',
            'price'              => 'required',
            'minititle'          => 'required',
            'miniprice'          => 'required',
            'short_desc'         => 'required',
            'about_image_1'      => 'image|max:500000',
            'about_image_2'      => 'image|max:500000',
            'about_image_3'      => 'image|max:500000',
            'about_desc'         => 'required',
            'next_desc_1'        => 'required',
            'multi_image.*'      => 'required|image|min:1',
        ]);

        $portfolio = Portfolio::create([
            'country'               => $request->country,
            'city_name'             => $request->city_name,
            'image'                 => $request->image,
            'title'                 => $request->title,
            'price'                 => $request->price,
            'minititle'             => $request->minititle,
            'miniprice'             => $request->miniprice,
            'short_desc'            => $request->short_desc,
            'about_image_1'         => 'foo',
            'about_image_2'         => 'foo1',
            'about_image_3'         => 'foo2',
            'about_desc'            => $request->about_desc,
            'next_desc_1'           => $request->next_desc_1,
            'ry'                    => $request->ry,
            'quantity_of_bricks'    => $request->quantity_of_bricks,
            'map'                   => $request->map,
            'long_desc'             => $request->long_desc,
            'next_desc_2'           => $request->next_desc_2,
            'next_desc_3'           => $request->next_desc_3,
            'curr'                  => $request->curr,
            'curre'                  => $request->curre,
        ]);

        // Upload Image
        $image    = $request->file('image');
        $filename = $portfolio->id. '.' .$image->extension();
        $location = public_path('uploads/portfolios/');
        $image->move($location, $filename); 

        // Save Image name in the database 
        $portfolio->image = $filename; 

        // about image 1
        if($request->hasFile('about_image_1')){

            //upload image
            $about_image_1    = $request->file('about_image_1');
            $about_filename_1 = $portfolio->id. '.about-1.' .$about_image_1->extension();
            $about_location_1 = public_path('uploads/portfolios/');
            $about_image_1->move($about_location_1, $about_filename_1);

            // save image in the database
            $portfolio->about_image_1 = $about_filename_1;
        }

        // about image 2
        if($request->hasFile('about_image_2')){

            //upload image
            $about_image_2    = $request->file('about_image_2');
            $about_filename_2 = $portfolio->id. '.about-2.' .$about_image_2->extension();
            $about_location_2 = public_path('uploads/portfolios/');
            $about_image_2->move($about_location_2, $about_filename_2);

            // save image in the database
            $portfolio->about_image_2 = $about_filename_2;
        }

        // about image 3
        if($request->hasFile('about_image_3')){

            //upload image
            $about_image_3    = $request->file('about_image_3');
            $about_filename_3 = $portfolio->id. '.about-3.' .$about_image_3->extension();
            $about_location_3 = public_path('uploads/portfolios/');
            $about_image_3->move($about_location_3, $about_filename_3);

            // save image in the database
            $portfolio->about_image_3 = $about_filename_3;
        }

        $portfolio->save();

        if($request->multi_image){

            $counter = 1;
 
             foreach($request->file('multi_image') as $images)
             {
                $multi_image = $images;
                $multi_filename    = $portfolio->id. '-'. $counter  . '.' .$multi_image->extension();
                $multi_location    = public_path('uploads/portfolios/');
 
                $multi_image->move($multi_location, $multi_filename);
 
                PortfolioImage::create([
                    'multi_image'  => $multi_filename,
                    'portfolio_id' => $portfolio->id,
                    'created_at'   => Carbon::now(),
                ]);
 
                $counter++;
 
             }
        }

        
           
        return redirect()->route('portfolios.index')->withSuccess('Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolios.details',compact('portfolio'));
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
            'country'            => 'required',
            'city_name'          => 'required',
            'image'              => 'image',
            'title'              => 'required',
            'price'              => 'required',
            'minititle'          => 'required',
            'miniprice'          => 'required',
            'short_desc'         => 'required',
            'about_image_1'      => 'image',
            'about_image_2'      => 'image',
            'about_image_3'      => 'image',
            'about_desc'         => 'required',
            'next_desc_1'        => 'required',
        ]);

        // Check if request has image 
        if($request->has('image'))
        {
            // Delete existing image
            // $existing = public_path('uploads/portfolios/' . $portfolio->image); 
            // unlink($existing);
              
            // Upload new image 
            $image    = $request->file('image');
            $filename = $portfolio->id. '.' .$image->extension();
            $location = public_path('uploads/portfolios/');
            $image->move($location, $filename);  

            // Declare new name for saving in database 
            $portfolio->image = $filename; 
        } 

        // update about image 1
        if($request->has('about_image_1'))
        {
            // Delete existing image
            // $about_image_existing_1 = public_path('uploads/portfolios/' . $portfolio->image); 
            // unlink($about_image_existing_1);
              
           //upload image
           $about_image_1    = $request->file('about_image_1');
           $about_filename_1 = $portfolio->id. '.about-1.' .$about_image_1->extension();
           $about_location_1 = public_path('uploads/portfolios/');
           $about_image_1->move($about_location_1, $about_filename_1);

           // save image in the database
           $portfolio->about_image_1 = $about_filename_1;
        } 

        // update about image 2
        if($request->has('about_image_2')){

             // Delete existing image
            //  $about_image_existing_2 = public_path('uploads/portfolios/' . $portfolio->image); 
            //  unlink($about_image_existing_2);

            //upload image
            $about_image_2    = $request->file('about_image_2');
            $about_filename_2 = $portfolio->id. '.about-2.' .$about_image_2->extension();
            $about_location_2 = public_path('uploads/portfolios/');
            $about_image_2->move($about_location_2, $about_filename_2);

            // save image in the database
            $portfolio->about_image_2 = $about_filename_2;
        }

        // update about image 3
        if($request->has('about_image_3')){

            // Delete existing image
            // $about_image_existing_3 = public_path('uploads/portfolios/' . $portfolio->image); 
            // unlink($about_image_existing_3);

            //upload image
            $about_image_3    = $request->file('about_image_3');
            $about_filename_3 = $portfolio->id. '.about-3.' .$about_image_3->extension();
            $about_location_3 = public_path('uploads/portfolios/');
            $about_image_3->move($about_location_3, $about_filename_3);

            // save image in the database
            $portfolio->about_image_3 = $about_filename_3;
        }

        // Update Other Fields
        $portfolio->country             = $request->country;
        $portfolio->city_name           = $request->city_name;
        $portfolio->title               = $request->title;
        $portfolio->price               = $request->price; 
        $portfolio->minititle           = $request->minititle;
        $portfolio->miniprice           = $request->miniprice; 
        $portfolio->ry                  = $request->ry; 
        $portfolio->quantity_of_bricks  = $request->quantity_of_bricks; 
        $portfolio->map                 = $request->map; 
        $portfolio->long_desc           = $request->long_desc; 
        $portfolio->short_desc          = $request->short_desc; 
        $portfolio->about_desc          = $request->about_desc; 
        $portfolio->next_desc_1         = $request->next_desc_1; 
        $portfolio->next_desc_2         = $request->next_desc_2; 
        $portfolio->next_desc_3         = $request->next_desc_3; 
        $portfolio->curr                = $request->curr; 
        $portfolio->curre               = $request->curre; 

         // Save Everything in database 
        $portfolio->save(); 


        if($request->multi_image){

            $counter = 1;
 
             foreach($request->file('multi_image') as $images)
             {
                $multi_image = $images;
                $multi_filename    = $portfolio->id. '-'. $counter  . '.' .$multi_image->extension();
                $multi_location    = public_path('uploads/portfolios/');
 
                $multi_image->move($multi_location, $multi_filename);
 
                PortfolioImage::create([
                    'multi_image'  => $multi_filename,
                    'portfolio_id' => $portfolio->id,
                    'created_at'   => Carbon::now(),
                ]);
 
                $counter++;
 
             }
        }

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

        if($portfolio) {

            $about_image_existing_1 = public_path('uploads/portfolios/' . $portfolio->about_image_1);
            unlink($about_image_existing_1); 
        }

        if($portfolio) {

            $about_image_existing_2 = public_path('uploads/portfolios/' . $portfolio->about_image_2);
            unlink($about_image_existing_2); 
        }

        if($portfolio) {

            $about_image_existing_3 = public_path('uploads/portfolios/' . $portfolio->about_image_3);
            unlink($about_image_existing_3);
        }

        // Delete from database
        $portfolio->delete(); 

        // Return success message after deletion 
        return back()->withSuccess('Deleted successfully');
    }
    /**
    *  Edit Multiple Image 
    */
   public function updateMultiple($id)
   {
       $product = Portfolio::find($id);

       return view('admin.portfolios.editMultiple', compact('product'));
   }
   /**
    *  Replace Multiple Image 
    */
   public function replaceMultiple(Request $request)
   {
       $request->validate([
           'image' => 'required|image',
       ]);

       $data = PortfolioImage::find($request->id);

       $existing = public_path('uploads/portfolios/' . $data->multi_image); 
       unlink($existing);

       $multi_image = $request->image; 
       $filename    = $data->multi_image;
       $location    = public_path('uploads/portfolios/');

       $multi_image->move($location, $filename);

       return back()->withSuccess('Image updated');

   }
}
