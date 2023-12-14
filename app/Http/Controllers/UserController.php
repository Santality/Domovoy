<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userUpdate(Request $request){
        // $request->validate([
        //     "lastname" => "required",
        //     "firstname" => "required",
        //     "phone" => "required|unique:users|",
        //     "email" => "required|unique:users|email",
        // ], [
        //         "lastname.required" => "Поле обязательно для заполнения",
        //         "firstname.required" => "Поле обязательно для заполнения",
        //         "phone.required" => "Поле обязательно для заполнения",
        //         "phone.unique" => "Данный телефон занят",
        //         "email.required" => "Поле обязательно для заполнения",
        //         "email.email" => "Введите правильный адрес",
        //         "email.unique" => "Данный адрес занят",
        //     ]
        // );

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
}
