<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class MonnaieController extends Controller
{

	 public  function show() {
	$monnayeur = [
	"5cts" => ["stock" => 50],
    "10cts" => ["stock"=> 50],
    "20cts" => ["stock"=>100],
    "50cts" => ["stock"=>100],
    "1euros" => ["stock"=>100],
    "2euros" => ["stock"=>100],
];
	return view('Monnaie',compact('monnayeur'));
	}
}