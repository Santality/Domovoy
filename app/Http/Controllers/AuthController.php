<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         "email" => "required|email",
    //         "password" => "required"
    //     ], [
    //         "email.required" => "Поле обязательно для заполнения",
    //         "email.email" => "Введите правильный адрес",
    //         "password.required" => "Поле обязательно для заполнения",
    //     ]);

    //     $user = $request->only("email_log", "password_log");

    //     if (Auth::attempt([
    //         "email" => $user['email'],
    //         "password" => $user['password']
    //     ])) {
    //         return redirect("/")->with("succes", "Успех");
    //     }else{
    //         return  redirect()->back()->with("error", "Неверный логин или пароль!!!");
    //     }

    // }

    public function register(Request $request)
    {
        $request->validate([
            "lastname" => "required",
            "firstname" => "required",
            "phone" => "required|unique:users|",
            "email" => "required|unique:users|email",
            "password" => "required",
            "confirm_password" => "required|same:password_reg",
        ], [
                "lastname.required" => "Поле обязательно для заполнения",
                "firstname.required" => "Поле обязательно для заполнения",
                "phone.required" => "Поле обязательно для заполнения",
                "phone.unique" => "Данный телефон занят",
                "email.required" => "Поле обязательно для заполнения",
                "email.email" => "Введите правильный адрес",
                "email.unique" => "Данный адрес занят",
                "password.required" => "Поле обязательно для заполнения",
                "confirm_password.required" => "Поле обязательно для заполнения",
                "confirm_password.same" => "Пароли должны совпадать"
            ]
        );

        $userInfo = $request->all();

        User::create([
            "lastname" => $userInfo['lastname'],
            "firstname" => $userInfo['firstname'],
            "phone" => $userInfo['phone'],
            "email" => $userInfo['email'],
            "password" => Hash::make($userInfo['password']),
        ]);
        return redirect("/")->with("succes", "Успех");
    }

    public function signout(){
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
