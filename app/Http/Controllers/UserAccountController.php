<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Customer;

class UserAccountController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function showUserAccount()
    {
        return view('user.account')->with('currentUser', Auth::user()->toArray());
    }

    public function updateUserAccount(Request $request, $userId)
    {

        //should be unique sku (name?)
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
        ]);

        // TODO: update customer email in stripe
        $user = User::find($userId);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        $user->save();



      //  dd($user->toArray());
        return redirect()->route('account');

    }

    public function showUserOrders()
    {
        //cards work
        //$user = Auth::user()->cards();
        $user = Auth::user();

        Stripe::setApiKey(config('services.stripe.secret'));
        $customer = Customer::retrieve($user->stripe_id);

        //$user->asStripeCustomer();
        return view('user.orders')->with('userData',$customer);
    }

    public function showUserSubscriptions()
    {
        return view('user.subscriptions');
    }

    public function showUserCards()
    {
        return view('user.cards');
    }

    public function logout()
    {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }

}
