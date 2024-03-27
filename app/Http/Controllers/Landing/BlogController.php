<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public BlogService $blogservice;
    public function __construct(BlogService $blogservice)
    {
        $this->blogservice = $blogservice;
    }

    public function index(Request $request){
        $blogs = $this->blogservice->getAllBlogs();
        if($request->ajax()){
            $blogs = $this->blogservice->getBlogsByFilter($request);
            return view('landing.pages.filter-blog',compact('blogs'))->render();
        }
        return view('landing.pages.blog',compact('blogs'));
    }

    public function blogDetail($category,$slug){
        $blog = Blog::where('slug',$slug)->get()->first();

        return view('landing.pages.blog-details',compact('blog'));
    }
}
