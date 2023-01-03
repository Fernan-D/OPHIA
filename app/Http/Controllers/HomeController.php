<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

use illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    

        public function index()
        {
            return view('home.userpage');
        }
        public function redirect()
          {
        $usertype=Auth::user()->usertype;
        if ($usertype =='1')
        {
        return view('admin.home');

        }
        else 
        {
                return view('dashboard');
        }
    
    }
}                                                