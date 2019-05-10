<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('user.account');
    }

    public function userOrders()
    {

    }

    public function userSubscriptions()
    {

    }

    public function userCards()
    {

    }

}
