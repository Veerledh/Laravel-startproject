<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function index()
    {
        $title = "Welkom!";
        Return view( 'home', compact( 'title'));
    }

}
