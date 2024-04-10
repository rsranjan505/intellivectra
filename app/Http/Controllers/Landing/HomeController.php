<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Mail\GetInTouchMail;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){

        $blogs = Blog::with('category','sub_category','banner','image')->latest()->get();
        return view('home',compact('blogs'));
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
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
        ]);

        // $to = env('MAIL_TO',null);
        $to = 'r.s.ranjan505@gmail.com';

        $data = $request->all();

        Mail::to($to)->send(new  GetInTouchMail($data));

    }
}
