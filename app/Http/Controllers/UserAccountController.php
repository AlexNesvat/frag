<?php

namespace App\Http\Controllers;

use App\Models\User;
use Telegram\Bot\Api;
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


        $telegram = new Api(env('bot_token'));
        $response = $telegram->getMe();

        $botId = $response->getId();
        $firstName = $response->getFirstName();
        $username = $response->getUsername();
        $updates = $telegram->getUpdates();
        //https://api.telegram.org/bot[token here]/getUpdates
//        $response = $telegram->sendMessage([
//            'chat_id' => '197991947',
//            'text' => 'Hello World'
//        ]);

        //from id = 197991947
       // print_r($response);
        dd($updates);
        return view('user.account')->with('currentUser', Auth::user()->toArray());
    }

    public function updateUserAccount(Request $request, $userId)
    {

        // TODO: update customer email in stripe
        $user = User::find($userId);
        if ($user->can('updateAccount', User::class)) {

            //should be unique sku (name?)
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
            ]);


            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];

            $user->save();

        }


        //  dd($user->toArray());
        return redirect()->route('account');

    }

    public function showUserOrders()
    {
        return view('user.orders');
    }

    public function showUserSubscriptions()
    {

        //cards work
        //$user = Auth::user()->cards();
        $user = Auth::user();

        Stripe::setApiKey(config('services.stripe.secret'));
        $customer = Customer::retrieve($user->stripe_id);


        //$user->asStripeCustomer();
        return view('user.subscriptions')->with('subscriptions', $customer->subscriptions->data)->with('currentUser',
            Auth::user()->toArray());

    }

    public function showUserCards()
    {
        $cards = Auth::user()->cards();
        return view('user.cards')->with('currentUser', Auth::user()->toArray())->with('userCards', $cards->toArray());
    }

    public function logout()
    {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }

}
