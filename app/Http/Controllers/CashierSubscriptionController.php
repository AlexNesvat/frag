<?php

namespace App\Http\Controllers;

use Exception;
use Stripe\Plan;
use Stripe\Stripe;
use App\Models\User;
use Illuminate\Http\Request;


/**
 * Class CashierSubscriptionController
 * @package App\Http\Controllers
 */
class CashierSubscriptionController extends Controller
{
    /**
     * CashierSubscriptionController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('checkout');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userPayForSubscription(Request $request)
    {
        //$user =  Auth::user();
        $user = $request->user();
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

}
