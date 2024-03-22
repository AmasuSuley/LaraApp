<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\posts; 

class PostController extends Controller
{
    
    public function index(){
        $post = posts::all();
    return view('posts.index', ['posts'=> $post]);
    
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        // dd($request->name);
        $data = $request->validate([
            'tittle' => 'required',
            'body' => 'required',
            'user_id'=> 'required',
        ]);
        $newPost = posts::create($data);
        return redirect(route('posts.index'));

    }
    public function edit(posts $post){
return view('posts.edit',['post' =>$post]);
    }

    public function update(posts $post, Request $request){
        $data = $request->validate([
            'tittle' => 'required',
            'body' => 'required',
        ]);
        $post->update($data);
        return redirect(route('posts.index'))->with('success', 'Your post Updated Successfully!!');
    }
 public function destroy(posts $post){
    $post->delete();
    return redirect(route('posts.index'))->with('success', ' Post deleted Successfully!!');
 }  

 public function ajax(Request $request){
    $data = $request->validate([
        'tittle' => 'required',
        'body' => 'required',
    
    ]);
    $newPost = posts::create($data);
    
    //return response()->json([]);
 }
    
}
