<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }

    public function index()
    {
        return view('home');
    }
}
