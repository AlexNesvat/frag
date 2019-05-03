<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CashierSubscriptionController extends Controller
{
    public function userPayForSubscription()
    {
        $user = User::find(2);
    }
}
