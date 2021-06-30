<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    /**
     *  Application Statistic
     */
    public function index()
    {
        $users = User::paginate(10);
        $total = User::count();

        return view('admin.index', compact('users' , 'total'));

    }

    // public function store(Request $request)
    // {
        
    //     $banners = Banner::all();

    //     if($banners->count() == 0)
    //     {

    //         Banner:create();
    //     }
    //     else 
    //     {
    //          return back()->withWarning('Please edit or delete your existing data in order to add new');
    //     }

    // }
}
