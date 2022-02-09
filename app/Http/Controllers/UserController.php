<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function register(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        session(['name' => $request->name]);
        return redirect()->route('userhome');
    }

    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();
        session(['name' => $user->name]);
        return redirect()->route('userhome');
    }

    public function logout() {
        session()->forget('name');
        return redirect()->route('top');
    }
}
