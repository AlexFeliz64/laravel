<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectoresController extends Controller
{
    public function index()
    {
        return view('directores');
    }
}
