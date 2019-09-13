<?php

namespace App\Http\Controllers;
use App\post;

use Illuminate\Http\Request;

class postscontroller extends Controller
{
    public function index(){
        $posts = post::orderBy('created','desc')->get();
         echo '<pre>'; print_r($posts); die;
    return view('posts.index',['posts'=>$posts]);
    }
}
