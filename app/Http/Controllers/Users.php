<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index()
	{
	    $users = array();//Users::paginate(5);
	        
	    return view('admin.users',compact('users'));
	}
}
