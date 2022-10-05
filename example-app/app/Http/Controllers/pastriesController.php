<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pastriesController extends Controller
{
    Public function show()
    {
        $title = ":)";
        Return view( 'pastries', compact( 'title'));
	}

}
