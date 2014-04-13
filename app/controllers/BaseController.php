<?php

class BaseController extends Controller
{
	public function __construct()
	{
		View::Share('css', '/assets/css/');
		View::Share('img', '/assets/img/');
		View::Share('js', '/assets/js/');
	}
	

}