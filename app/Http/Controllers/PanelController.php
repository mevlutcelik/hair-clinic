<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function view(){
        return view('pages.panel.index');
    }

    public function login(Request $request){
        dd($request->all());
    }
}
