<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;


class CashierSubscriptionController extends Controller
{
    /**
     * CashierSubscriptionController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('checkout');
    }

    public function userPayForSubscription(Request $request)
    {
        $user = User::find(2);
        $input = $request->all();
        $creditCardToken = $input['stripeToken'];

        try {
            $user->newSubscription('inner_circle', 'primary')->create($creditCardToken, [
                'email' => $user->email,
            ]);
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
