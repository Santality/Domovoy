<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Room;
use App\Models\Type;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function createPost(Request $request){
        $newPost = $request->all();
        $idPost = Post::create([
            'title' => $newPost['title'],
            'type' => $newPost['type'],
            'estate' => $newPost['estate'],
            'room' => $newPost['room'],
            'seller' => 1,
            'description' => $newPost['description'],
            'floor' => $newPost['floor'],
            'number' => $newPost['number'],
            'cost' => $newPost['cost'],
            'address' => $newPost['address'],
            'all_area' => $newPost['all_area'],
            'living_area' => $newPost['living_area'],
            'height' => $newPost['height'],
            'status' => 1,
        ]);
        $photo = $request->file('photo');
        if(isset($photo)){
            foreach ($photo as $photos){
                $name = $photos->hashName();
                $patch = $photos->store('public/img');
                Photo::create([
                    'id_post' => $idPost->id,
                    'title_photo' => $name,
                ]);
            }
        }
        return redirect('/post_create');
    }
    public function pagePostCreate(){
        $rooms = Room::all();
        $estates = Estate::all();
        $types = Type::all();
        return view('post_create', ['rooms' => $rooms, 'estates' => $estates, 'types' => $types]);
    }
}
