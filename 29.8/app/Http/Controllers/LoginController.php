<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $user = User::where('name', $name)->first();

        if ($user) {
            if ($password == $user->password) {

                return view('home', compact('name'));

            } else {
                return redirect('welcome');
            }
        }
    }
}




