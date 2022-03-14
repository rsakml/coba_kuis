<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $blog = Blog::all();

        return view('blog')
                ->with('title', 'Blog')
                ->with('blog', $blog);
    }
}
