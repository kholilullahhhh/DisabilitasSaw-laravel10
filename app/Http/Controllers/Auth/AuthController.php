<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function regisStore(Request $request)
    {
        $req = $request->all();
        $req['password'] = bcrypt($req['password']);
        $cek = User::create($req);
        if ($cek)
            return view('pages.auth.login');
        return redirect()->back()->with('message', 'gagal register');
    }

    public function regis()
    {
        return view('pages.auth.register');
    }
    public function login_action(Request $request)
    {
        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password) && $user->role === $request->role) {
            Auth::login($user); 
            Session::put('user_id', $user->id);
            Session::put('name', $user->name);
            Session::put('username', $user->username);
            Session::put('role', $user->role);
            Session::put('cek', true);
            return redirect()->route('admin')->with('message', 'sukses login');
        } else {
            return redirect()->back()->with('message', 'gagal login');
        }
    }

}
