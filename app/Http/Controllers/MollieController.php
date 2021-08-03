<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use Carbon\Carbon;
use App\Models\Sale;
use App\Models\User;
use App\Models\Course;
use App\Models\Wallet;
use App\Models\LiveSession;
use App\Mail\NewAppointment;
use App\Models\Availibility;
use Illuminate\Http\Request;
use App\Mail\ZoomLinkForCoachAkil;
use Mollie\Laravel\Facades\Mollie;

class MollieController extends Controller
{

    public function  __construct() {
        Mollie::api()->setApiKey('test_GPnmyFCTF6KF8Fu3rSjJmSNbU6BCNc'); // your mollie test api key
        $this->middleware('auth')->except('handle');
        $this->middleware('verified')->except('handle');
    }

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment(Request $request)
    {
    

            $payment = Mollie::api()->payments()->create([
            'amount' => [
                'currency' => $request->currency, // Type of currency you want to send
                'value' =>  $request->amount .'.00', // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'Make a deposit to B.hive',
            "webhookUrl" => route('webhooks.mollie'),
            'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
            ]);
    
            $payment = Mollie::api()->payments()->get($payment->id);
    
            $sale = Wallet::create([
              'user_id'    => Auth::id(),
              'balance'      => $request->balance,
              'currency'      => $request->currency,
              'payment_id' => $payment->id,
              'created_at' => Carbon::now(),
            ]);
            
    
            // redirect customer to Mollie checkout page
            return redirect($payment->getCheckoutUrl(), 303);


    }


    public function handle(Request $request) {
        if (! $request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);
        if($payment->isPaid()) {

          $sale = Wallet::where('payment_id', $request->id)->firstOrFail();
          $sale->status = 'paid';
          $sale->save();

          $user = Auth::user(); 
          $user->increment('balance', $sale->balance);
          if($sale->currency == 'EUR')
          {
              $user->currency = '€';
          }
          else 
          {
              $user->currency = '£';
          }

          $user->save();
          

        }
    }


    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess(Request $request) {

        return redirect('/customer/dashboard')->withSuccess('Thank you !! Your deposit was successful');

    }
}