<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $request->validate([
            'caption' => 'required',
            'image'=> 'required|mimes:png,jpg,jpeg,svg,webp',

        ]);

        if($request->file('image')){
            $image_name = Str::uuid().'.'.$request->image->extension();
            Image::make($request->image)->crop(800, 609)->save(public_path('storage/product/'.$image_name, 90));
        
            $post = Post::create([
                'user_id' => auth()->user()->id,
                'caption' =>$request->caption,
                'image' => $image_name,
            ]);

            return redirect('/profile/' . auth()->user()->id);
        }else{
            return redirect('/profile/' . auth()->user()->id);
        }
        }

        public function show(Post $post){
            return view('posts.show', compact('post'));
        }
        
}

