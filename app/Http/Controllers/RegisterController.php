<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('/register');
    }
    public function create(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);
        return redirect('/register');
    }
}
