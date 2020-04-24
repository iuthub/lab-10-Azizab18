<?php 

namespace App\Http\Cpntrollers;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends HomeController
{
	/*
	*Create new controller

	@return void
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		return view('home');
	}
}
 ?>
