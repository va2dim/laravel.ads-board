<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __constructor()
    {
        $this->middleware('guest')->except(['destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {

        $this->validate(request(), [
            'name' => 'required',
            'password' => 'required',
        ]);

        if(User::whereName(request('name'))->first()) {
            if (!auth()->attempt(request(['name', 'password']))) {
                return back()->withErrors([
                    'message' => 'Некорректный пароль для пользователя '.request('name')
                ]);
            }
        } else {
            $user = User::create([
                'name' => request('name'),
                'password' => bcrypt(request('password')),
            ]);
            auth()->login($user);
        }

        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
