<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Mail\GetInTouchMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    //Get In Touch Mail
    public function getInTouch(Request $request)
    {
        $to = env('MAIL_TO',null);
        $data= $request->all();

        Mail::to($to)->send(new  GetInTouchMail($data));

    }
}
