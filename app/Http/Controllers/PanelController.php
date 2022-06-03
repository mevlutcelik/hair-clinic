<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PanelController extends Controller
{
    public function view(){
        return view('pages.panel.index');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard')->with('success', 'Signed in');
        }
        return redirect()->back()->withInput()->with('error', 'E-postanız veya şifreniz hatalı');
    }

    public function dashboard(){
        if(Auth::check()){
            $posts = Appointments::paginate(10);
            return view('pages.panel.dashboard', compact('posts'))->with([
                'posts' => $posts
            ]);
        }
        return redirect()->back()->withInput()->with('error', 'Lütfen giriş yapınız!');
    }

    public function signOut(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
