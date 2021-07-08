<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
        $this->middleware('checkrole');
    }

    /**
     *  Application Statistic
     */
    public function index()
    {
        $users = User::where('role', 'customer')->paginate(10);
        $admins = User::where('role', 'admin')->paginate(10);
        $total = User::count();
        $record = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        ->where('created_at', '>', Carbon::today()->subDay(6))
        ->groupBy('day_name','day')
        ->orderBy('day')
        ->get();
      
         $data = [];
     
         foreach($record as $row) {
            $data['label'][] = $row->day_name;
            $data['data'][] = (int) $row->count;
          }
     
        $data['chart_data'] = json_encode($data);


        return view('admin.index', compact('users' , 'admins', 'total', 'data'));

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
