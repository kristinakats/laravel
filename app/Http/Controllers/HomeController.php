<?php

/**
* 
*/
class HomeController extends Controller
{
	
	public function getindex()
	{
		return View::make ('home');
	}
}