<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('index');
        
    }

    public function about()
    {
        $companyName = 'Argon Software';
        return view('about', compact('companyName'));
    }

    public function aboutCulture()
    {
        return view('about-culture');
    }

    public function contact()
    {
        return view('contact');
    }
}