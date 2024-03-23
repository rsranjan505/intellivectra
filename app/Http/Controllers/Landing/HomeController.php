<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }


    // Privacy
    public function privacy(){
        return view('landing.pages.privacy');
    }


    // Term
    public function term(){
        return view('landing.pages.term');
    }
}
