<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        ]);
        $newPost = posts::create($data);
        return redirect(route('posts.index'));

    }

    
}
