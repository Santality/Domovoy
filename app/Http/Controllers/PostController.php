<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function detailPost($id){
        $deatils = Post::find($id);
        return view('post', ['deatails' => $deatils]);
    }
}
