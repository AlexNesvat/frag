<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        return view('admin.admin');
    }

    public function users(){
        $users = User::all();

        return json_encode($users);
    }
    public function user($id){
        $user = User::findOrFail($id);
        //return $user;
        return view('admin.user', $user);
    }
}
