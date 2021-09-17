<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Models\UserInformation;
use App\Models\CustomerDocument;
use Stevebauman\Location\Facades\Location;

class CustomerController extends Controller
{
    /**
     * Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified'); 
        $this->middleware('preventBackHistory');
    }

    public function preventBack()
    {
        return view('r');
    }
    /**
     *  Customer  Dashboard
     */
    public function index()
    {

 
    if(Auth::user()->role == 'admin')
    {
        return redirect('/admin/dashboard');
    }
    else 
    {
        if(UserInformation::where('user_id', Auth::id())->doesntExist())
        {
            return view('customer.index');
        } 
        elseif(CustomerDocument::where('user_id', Auth::id())->doesntExist())
        {
            return redirect()->route('customer.document');
        }
        else 
        {
            return redirect()->route('customer.dashboard');
        }
    }       

    }
    /**
     * Customer account page 
     */
    public function account()
    {
        

        if(Auth::user()->role == 'admin')
        {
            return redirect('/admin/dashboard');
        }
        else 
        {
        return view('customer.dashboard');
        }
    }

    /**
     *  Store customer information 
     */
    public function customerInfo(Request $request)
    {
        if(UserInformation::where('user_id', Auth::id())->doesntExist())
        {
            $request->validate([
                'full_name' => 'required', 
                'dob'       => 'required', 
                'city'      => 'required', 
                'country'   => 'required', 
            ],[
                'dob.required' => 'Date of birth is required',
            ]);
    
            UserInformation::create([
                'full_name' => $request->full_name, 
                'dob'       => $request->dob, 
                'city'      => $request->city, 
                'country'   => $request->country,
                'created_at'=> Carbon::now(),
                'user_id'   => Auth::id(),
            ]);

            return redirect()->route('customer.document');
        }

        else 
        {
            return redirect()->route('customer.document');
        }
    }

    /**
     * Customer Document Form 
     */
    public function customerDocuments()
    {
        if(CustomerDocument::where('user_id', Auth::id())->doesntExist())
        {
            return view('customer.document');
        }
        else 
        {
            return redirect()->route('customer.thanks');
        }
    }

    /**
     *  Customer Documents 
     */
    public function customerDoc(Request $request)
    {
        if(CustomerDocument::where('user_id', Auth::id())->doesntExist())
        {
            $request->validate([
                'pid' => 'required', 
                'doc' => 'required|file',
            ],[
                'pid.required' => 'Please provide your Personal Identification Number',
                'doc.required' => 'A supported document to prove your identity is required', 
                'doc.file'     => 'Your document must be a file type',  
            ]);
    
            $data = CustomerDocument::create([
                'pid'      => $request->pid, 
                'doc'      => 'file', 
                'user_id'  => Auth::id(), 
            ]);
    
            $doc = $request->file('doc');
            $filename = $data->id. '.' .$doc->extension('doc');
            $location = public_path('uploads/documents'); 
            $doc->move($location, $filename); 
    
            $data->doc = $filename; 
            $data->save(); 
    
            return redirect()->route('customer.thanks');
        }
        else
        {
            return redirect()->route('customer.thanks'); 
        }
    }

    /**
     *  Registration Complete 
     */
    public function complete()
    {
        return view('customer.thankyou');
    }

// END    
}
