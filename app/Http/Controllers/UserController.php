<?php

namespace App\Http\Controllers;

use App\Models\Favourites;
use App\Models\Photo;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userUpdate(Request $request){
        $request->validate([
            "lastname" => "required",
            "firstname" => "required",
            "phone" => "required|unique:users|",
            "email" => "required|unique:users|email",
        ], [
                "lastname.required" => "Поле обязательно для заполнения",
                "firstname.required" => "Поле обязательно для заполнения",
                "phone.required" => "Поле обязательно для заполнения",
                "phone.unique" => "Данный телефон занят",
                "email.required" => "Поле обязательно для заполнения",
                "email.email" => "Введите правильный адрес",
                "email.unique" => "Данный адрес занят",
            ]
        );

        $updateInfo = User::find(Auth::user()->id);
        if (!empty($request['photo'])) {
            $name_photo = $request->file('photo')->hashName();
            $path_photo = $request->file('photo')->store('public/img');
            $updateInfo->photo = $name_photo;
        }
        if (!empty($request['password'])) {
            $updateInfo->password = Hash::make($request['password']);
        }

        $updateInfo->firstname = $request['firstname'];
        $updateInfo->lastname = $request['lastname'];
        $updateInfo->phone = $request['phone'];
        $updateInfo->email = $request['email'];
        $updateInfo->save();

        return redirect('/profile')->with('succes', 'Успешная регистрация');
    }

    public function myPosts(){
        $postList = Post::where('seller', '=', Auth::user()->id)->paginate(10);
        return view('profile', ['userPosts' => $postList]);
    }

    public function deletePost($id){
        $deleted = Photo::where('id_post', $id)->delete();
        $post = Post::where('id', $id)->delete();
        return redirect('/profile');
    }

    public function editPost($id){
        $post = Post::find($id);
        return view('editPost', ['postInfo' => $post]);
    }

    public function updatePost(Request $request){
        $request->validate([
            "title" => "required",
            "cost" => "required",
            "address" => "required",
            "all_area" => "required",
        ], [
                "title.required" => "Поле обязательно для заполнения",
                "cost.required" => "Поле обязательно для заполнения",
                "address.required" => "Поле обязательно для заполнения",
                "all_area.required" => "Поле обязательно для заполнения",
            ]
        );

        $post = Post::find($request['id']);
        $photo = $request->file('photo');
        if(!empty($photo)){
            $deleted = Photo::where('id_post', $request['id'])->delete();
            foreach ($photo as $photos){
                $name = $photos->hashName();
                $patch = $photos->store('public/img');
                Photo::create([
                    'id_post' => $post->id,
                    'title_photo' => $name,
                ]);
            }
        }
        $post->title = $request['title'];
        $post->cost = $request['cost'];
        $post->address = $request['address'];
        $post->all_area = $request['all_area'];
        $post->floor = $request['floor'];
        $post->number = $request['number'];
        $post->living_area = $request['living_area'];
        $post->height = $request['height'];
        $post->description = $request['description'];
        $post->save();
        return redirect('/profile');
    }

    public function confirmPost($id){
        $post = Post::find($id);
        $post->status = 2;
        $post->save();
        return redirect('/profile');
    }

    public function addFavourites($id){
        $existingFavourite = Favourites::where('id_user', Auth::user()->id)->where('id_post', $id)->first();
        if($existingFavourite){
            return redirect('/favourits');
        }else{
            Favourites::create([
                "id_user" => Auth::user()->id,
                "id_post" => $id,
            ]);
            return redirect('/favourits');
        }
    }

    public function listFavourites(){
        return redirect('/');
        // $lists = Favourites::where('id_user', '=', Auth::user()->id)->get();
        // return view('favourites', ['lists' => $lists]);
    }
}
