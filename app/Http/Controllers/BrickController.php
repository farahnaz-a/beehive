<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Brick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BrickController extends Controller
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
     *  Store
     */
    public function store(Request $request)
    {
        $request->validate([
            'bricks_qty' => 'required', 
            'amount'     => 'required',
        ]);

        if($request->amount >= $request->miniprice)
        {
            if(Auth::user()->balance >= $request->amount)
            {
                User::where('id', Auth::id())->decrement('balance', $request->amount);
                $brick = Brick::where('user_id', Auth::id())->where('portfolio_id', $request->portfolio_id)->first();
                if($brick)
                {

                    $brick->bricks_qty = $brick->bricks_qty + $request->bricks_qty;
                    $brick->amount = $brick->amount + $request->amount;
                    $brick->save();
                }
                else 
                {
                    Brick::create([
                        'user_id' => Auth::id(),
                        'portfolio_id' => $request->portfolio_id, 
                        'bricks_qty'  => $request->bricks_qty, 
                        'amount'      => $request->amount, 
                        'created_at'  => Carbon::now(),
                    ]);
                }

                return back()->withSuccess('Bricks succesfully purchased.');
            }
            else 
            {
                return back()->withErrors('You do not have sufficient balance to buy the bricks.Please make a deposit and try again');
            }
        }
        else 
        {
            return back()->withErrors('Minimum brick price is ' . $request->miniprice . ' €');
        }
    }
}
