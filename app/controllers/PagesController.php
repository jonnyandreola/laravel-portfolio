<?php

class PagesController extends BaseController
{

	public function home()
	{
		return View::make('home');
	}

	public function about()
	{
		return View::make('about');
	}

}