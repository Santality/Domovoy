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
            "lastname" => "required|alpha",
            "firstname" => "required|alpha",
            "phone" => "required|numeric",
            "email" => "required|email",
            "password" => "nullable|min:8",
        ], [
                "lastname.required" => "Поле обязательно для заполнения",
                "lastname.alpha" => "Поле должно содержать только буквы",
                "firstname.required" => "Поле обязательно для заполнения",
                "firstname.alpha" => "Поле должно содержать только буквы",
                "phone.required" => "Поле обязательно для заполнения",
                "phone.numeric" => "Поле должно содержать только цифры",
                "email.required" => "Поле обязательно для заполнения",
                "email.email" => "Введите правильный адрес",
                "password.min" => "Длина пароля должна быть больше 8",
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

    public function sellerInfo($id){
        $seller = User::find($id);
        $userPosts = Post::where('seller', $id)->paginate(10);
        return view('seller', ['seller' => $seller, 'userPosts' => $userPosts]);
    }
}
