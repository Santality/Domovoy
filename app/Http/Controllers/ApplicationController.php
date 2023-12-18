<?php

namespace App\Http\Controllers;

use App\Models\Estate;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Room;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function createPost(Request $request){
        $request->validate([
            "title" => "required|string",
            "cost" => "required|numeric",
            "address" => "required|string",
            "all_area" => "required|numeric",
            "floor" => "nullable|numeric",
            "number" => "nullable|numeric",
            "living_area" => "nullable|numeric",
            "height" => "nullable|numeric",
            "description" => "nullable|string",
        ], [
                "title.required" => "Поле обязательно для заполнения",
                "title.string" => "Поле должно быть строкой",
                "cost.required" => "Поле обязательно для заполнения",
                "cost.numeric" => "Поле должно содержать только цифры",
                "address.required" => "Поле обязательно для заполнения",
                "address.string" => "Поле должно быть строкой",
                "all_area.required" => "Поле обязательно для заполнения",
                "floor.numeric" => "Поле должно содержать только цифры",
                "number.numeric" => "Поле должно содержать только цифры",
                "living_area.numeric" => "Поле должно содержать только цифры",
                "height.numeric" => "Поле должно содержать только цифры",
                "description.string" => "Поле должно быть строкой",
            ]
        );

        $newPost = $request->all();
        $idPost = Post::create([
            'title' => $newPost['title'],
            'type' => $newPost['type'],
            'estate' => $newPost['estate'],
            'room' => $newPost['room'],
            'seller' => Auth::user()->id,
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
        return redirect('/profile');
    }
    public function pagePostCreate(){
        $rooms = Room::all();
        $estates = Estate::all();
        $types = Type::all();
        return view('post_create', ['rooms' => $rooms, 'estates' => $estates, 'types' => $types]);
    }
}
