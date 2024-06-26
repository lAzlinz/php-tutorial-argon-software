<?php

class PagesController
{
    public function home()
    {
        $names = App::get('database')->selectAll('users_t', MyName::class);

        return view('index', compact('names')); // The same as ['names' => $names]
        
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