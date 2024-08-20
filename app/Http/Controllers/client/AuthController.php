<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('front.register.index');
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'string|max:255|required',
            'email' => 'string|max:255|email|required|unique:users',
            'password' => 'string|min:8|required|confirmed',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'slug' => str_replace(' ', '_', strtolower($request->name)),
            ]);

            return redirect()->route('login')->with('success', 'register successfully');
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            return redirect()->back()->with('error', 'register failed for some reasons' . $ex->getMessage())->withInput();
        }
    }

    public function login()
    {
        return view("front.login.index");
    }

    public function signin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('home');
            }
            return redirect()->back()
                ->withErrors(['email' => 'The provided credentials do not match our records.'])
                ->withInput();
        } catch (\Exception $ex) {
            return redirect()->back()->with("error", "Login failed for some reasons" . $ex->getMessage())->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
