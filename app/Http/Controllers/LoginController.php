<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use stdClass;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(\Illuminate\Support\Facades\Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect('/login');

    }
    public function show()
    {
        return view('register_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.mynews');
        }

        return redirect()->route('/')->with('error', 'E-mail ou senha incorretos');
    }

}
