<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use App\web\Controllers\Controller;

class RegisterController extends Controller
{
    public function save(Request $request)
    {
        if (Auth::check()) {
            return redirect()->to(route('user.private'));
        }
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (User::where('email', $validation['email'])->exists()) {  //ПРоверка на уже существующий и уход обратно на стр регистрации
            return redirect(route('user.registration'))->withErrors([
                'email' => 'Такой email уже зарегистрирован'
            ]);
        }
        $user = User::create($validation);
        if ($user) {
            Auth::login($user);
            return redirect()->to(route('user.private'));
        }
        return redirect()->to(route('user.private'))->withErrors([
            'FormError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}
