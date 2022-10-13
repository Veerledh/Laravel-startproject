<?php

namespace App\Http\Controllers;

use App\Models\Pastry;
use Illuminate\Http\Request;

class PastriesTestController extends Controller
{
    Public function show()
    {
        $title = "Pastries :)";
        $pastries = Pastry::all();
        Return view( 'pastries', compact( 'title'), ['pastries'=>$pastries]);
	}

}
