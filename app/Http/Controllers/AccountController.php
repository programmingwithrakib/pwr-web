<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function profile(){
        return view('pages.account.profile');
    }

    public function reads(){
        return view('pages.account.reads');
    }
}
