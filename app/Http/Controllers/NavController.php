<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function dashboard(){
    	return view('dashboard');
    }

    public function logout(){
    	return view('login');
    }

    public function profile(){
    	return view('profile');
    }
}
