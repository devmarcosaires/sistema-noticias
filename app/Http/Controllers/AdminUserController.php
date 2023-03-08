<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AdminUserController extends Controller
{
    public function index()
{
    $users = User::all();
    return view('admin.users', compact('users'));
}

    public function create()
    {
        return view('admin.user_create');

    }

    public  function edit(User $user)
    {

        return view('admin.user_edit', [
            'user' => $user
        ]);
    }
    public function update(User $user, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'required|min:3',
        ]);


        $user->fill($validatedData);


    if ($request->filled('password')){
        $user->password = bcrypt($request->input('password'));
    }
        $user->save();

        return Redirect::route('admin.users');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return Redirect::route('admin.users');
    }

}
