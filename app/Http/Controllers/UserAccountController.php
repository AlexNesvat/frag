<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function showUserAccount()
    {
        return view('user.account');
    }

    public function showUserOrders()
    {
        return view('user.orders');
    }

    public function showUserSubscriptions()
    {
        return view('user.subscriptions');
    }

    public function showUserCards()
    {
        return view('user.cards');
    }

}
