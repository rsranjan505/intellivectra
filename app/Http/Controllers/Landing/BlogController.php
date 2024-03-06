<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('landing.pages.blog');
    }

    public function blogDetail($name){
        return view('landing.pages.blog-details',['name'=>$name]);
    }
}
