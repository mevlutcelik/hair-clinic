<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeforeAfterController extends Controller
{
    public function view(){
        return view('pages.before-after.index');
    }
}
