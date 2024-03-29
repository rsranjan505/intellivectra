<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(){
        return view('landing.pages.career');
    }

    //Career Apply Form
    public function apply(){
        return view('landing.pages.career-apply');
    }

    public function sendApply(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'total_experience' => 'required',
            'applied_for' => 'required',
            "attach_cv" => "required|mimes:pdf,doc|max:10000"
        ]);
    }
}
