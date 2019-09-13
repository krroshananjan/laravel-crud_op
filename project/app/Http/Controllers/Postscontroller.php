<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class Postscontroller extends Controller
{
    public function index() {
        $posts = Post:: orderBy('created','desc')->get();
       //echo '<pre>'; print_r($posts); 
        
        return view('post.index',['posts'=>$posts]);
       
        
    }

    public function add() {
        return view ('post.add');
        
    }

    public function insert(Request $request) {
        $this->validate($request ,[
            'tittle'=> 'required',
            'content' => 'required'
        ]);

        $postdata = $request->all();
        Post::create($postdata);

        //Session::fash('sucess_msg', 'Post added successfully !');
        return redirect()->route('post.index')->with('Post added sucessfully');

        
    }


    public function edit($id) {
    
        $posts = Post::find($id);
        return view ('post.edit',['posts'=>$posts]);
     
    }


    public function details ($id) {
        $posts = Post::find($id);
        return view('post.details',compact('posts'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tittle' => 'required',
            'content' => 'required'
        ]);
        Post::find($id)->update($request->all());
        return redirect()->route('post.index')->with('success','Post updated successfully');
    }

    public function delete($id) {
        Post::find($id)->delete();

       // Session::flash('sucess_msg', 'post deleted sucessfully!');
        return redirect()->route('post.index');
        
    }



  
}
