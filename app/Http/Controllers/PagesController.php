<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function ShowRegister()
    {
        return view('pages.register');
    }
}
