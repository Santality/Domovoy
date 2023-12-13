<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $index = Post::with('photo')->paginate(20);
        return view('index', ['posts' => $index]);
    }

    public function detailPost($id){
        $details = Post::with('photo','estate')->find($id);
        $estateData = $details->estate->title_estate;
        dd($estateData);
        return view('post', ['details' => $details, 'estateData' => $estateData]);
    }
}
