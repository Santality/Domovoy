<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            "email_log" => "required|email",
            "password_log" => "required|min:8"
        ], [
            "email_log.required" => "Поле обязательно для заполнения",
            "email_log.email" => "Введите правильный адрес",
            "password_log.required" => "Поле обязательно для заполнения",
            "password_log.min" => "Длина пароля должна быть больше 8"
        ]);

        $user = $request->only("email_log", "password_log");

        if (Auth::attempt([
            "email" => $user['email_log'],
            "password" => $user['password_log']
        ])) {
            if(Auth::user()->role == 1){
                return redirect('/admin')->with("succes", "Успех");
            }else{
                return redirect("/")->with("succes", "Успех");
            }
        }else{
            return  redirect()->back()->with("error", "Неверный логин или пароль!!!");
        }

    }

    public function register(Request $request)
    {
        $request->validate([
            "lastname" => "required|alpha",
            "firstname" => "required|alpha",
            "phone" => "required|unique:users|numeric",
            "email" => "required|unique:users|email",
            "password" => "required|min:8",
            "confirm_password" => "required|same:password",
        ], [
                "lastname.required" => "Поле обязательно для заполнения",
                "lastname.alpha" => "Поле должно содержать только буквы",
                "firstname.required" => "Поле обязательно для заполнения",
                "firstname.alpha" => "Поле должно содержать только буквы",
                "phone.required" => "Поле обязательно для заполнения",
                "phone.unique" => "Данный телефон занят",
                "phone.numeric" => "Поле должно содержать только цифры",
                "email.required" => "Поле обязательно для заполнения",
                "email.email" => "Введите правильный адрес",
                "email.unique" => "Данный адрес занят",
                "password.required" => "Поле обязательно для заполнения",
                "password.min" => "Длина пароля должна быть больше 8",
                "confirm_password.required" => "Поле обязательно для заполнения",
                "confirm_password.same" => "Пароли должны совпадать"
            ]
        );

        $userInfo = $request->all();

        $user = User::create([
            "lastname" => $userInfo['lastname'],
            "firstname" => $userInfo['firstname'],
            "phone" => $userInfo['phone'],
            "email" => $userInfo['email'],
            "role" => 2,
            "password" => Hash::make($userInfo['password']),
        ]);
        Auth::login($user);
        return redirect("/")->with("succes", "Успех");
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
