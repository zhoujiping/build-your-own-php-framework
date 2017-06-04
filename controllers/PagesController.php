<?php 

class PagesController
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}