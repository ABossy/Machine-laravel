<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;//nom du model


class UsersController extends Controller
{

    public function show()
	{
		return view('infos');
	}


}