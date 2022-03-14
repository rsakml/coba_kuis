<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogDetail;

class BlogDetailController extends Controller
{
    public function blogDetail(){
        
            $blogDetail = BlogDetail::all();
    
            return view('blog-detail')
                    ->with('title', 'Blog Detail')
                    ->with('blogDetail', $blogDetail);
        }
}
