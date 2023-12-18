<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use App\Models\Post;
use App\Models\Room;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        $index = Post::with('photo')->where('status', '=', '1')->paginate(20);
        return view('index', ['posts' => $index]);
    }

    public function detailPost($id){
        $details = Post::with('photo', 'estate', 'seller', 'room', 'status')->find($id);
        $details->estate = Estate::find($details->estate)->title_estate;
        $details->room = Room::find($details->room)->title_room;
        $details->title_status = Status::find($details->status)->title_status;
        $details->seller_firstname = User::find($details->seller)->firstname;
        $details->seller_phone = User::find($details->seller)->phone;
        $details->seller_image = User::find($details->seller)->photo;
        return view('post', ['details' => $details]);
    }
}
