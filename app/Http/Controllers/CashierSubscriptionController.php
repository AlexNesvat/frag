<?php

namespace App\Http\Controllers;

use Exception;
use Stripe\Plan;
use Stripe\Stripe;
use App\Models\User;
use Illuminate\Http\Request;


class CashierSubscriptionController extends Controller
{
    /**
     * CashierSubscriptionController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('checkout');
    }

    public function userPayForSubscription(Request $request)
    {
        //$user =  Auth::user();
        $user =  $request->user();
        $input = $request->all();
        $creditCardToken = $input['stripeToken'];

        try {
            Stripe::setApiKey(config('services.stripe.secret'));
            $plans = Plan::all(['limit' => 1]);

            $user->newSubscription($input['plane'], $plans->data[0]->id)->create($creditCardToken, [
                'email' => $user->email,
            ]);
            $user->role = 'subscriber';
            $user->save();
            return back()->with('success', 'Subscription payment complete.');
        } catch (Exception $e) {
            return back()->with('success', $e->getMessage());
        }
    }


    //$user->subscription('inner_circle')->cancel();

//    if ($user->subscription('main')->onGracePeriod()) {
//    //
//}
//if ($user->subscription('main')->cancelled()) {
//    //
//}
//  if ($request->user() && ! $request->user()->subscribed('main')) {
//        // This user is not a paying customer...
//        return redirect('billing');
//    }
//$user->subscription('main')->resume();


//// Stripe принимает сумму в центах...
//$user->charge(100);
//
//// Braintree принимает сумму в долларах...
//$user->charge(1);
//// Stripe принимает сумму в центах...
//$user->invoiceFor('One Time Fee', 500);
}
