<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $index = Post::with('photo')->paginate(20);
        return view('index', ['posts' => $index]);
    }

    public function detailPost($id){
        $details = Post::with('photo', 'estate', 'seller')->find($id);
        $details->estate = Estate::find($details->estate)->title_estate;
        $details->seller_firstname = User::find($details->seller)->firstname;
        $details->seller_phone = User::find($details->seller)->phone;
        return view('post', ['details' => $details]);
    }
}
