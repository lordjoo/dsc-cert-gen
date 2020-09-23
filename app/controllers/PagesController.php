<?php


class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function maintain()
    {
        return view('maintain');
    }
}