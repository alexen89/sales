<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ventas extends Controller
{
    public function index()
    {
        return view('admin.dashboard')->with(array('modules'=>$modules));
    }
}
