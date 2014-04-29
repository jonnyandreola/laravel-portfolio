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

    public function work()
    {
        return View::make('work');
    }

    public function contact()
    {
        View::share('sent', Session::get('sent'));
        return View::make('contact');
    }
}