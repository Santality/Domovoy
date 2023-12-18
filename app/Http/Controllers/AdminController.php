<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminUsers(){
        $userList = User::where('role', 2)->paginate(30);
        return view('admin.admin', ['userList' => $userList]);
    }

    public function adminPosts(){
        $postList = Post::with('photo')->paginate(30);
        return view('admin.postList', ['postList' => $postList]);
    }

    public function postDelete($id){
        $deleted = Photo::where('id_post', $id)->delete();
        $post = Post::where('id', $id)->delete();
        return redirect('/postList');
    }
}
