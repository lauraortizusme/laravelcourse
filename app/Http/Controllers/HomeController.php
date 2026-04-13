<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about()
    {
        $data = [];
        $data['title'] = 'About us - Online Store';
        $data['subtitle'] = 'About us';
        $data['description'] = 'This is an about page ...';
        $data['author'] = 'Developed by: Laura';

        return view('home.about')->with($data);
    }

    public function contact()
    {
        $data = [];
        $data['title'] = 'Contact - Online Store';
        $data['subtitle'] = 'Contact us';
        $data['name'] = 'Laura';
        $data['address'] = 'Address';
        $data['phone'] = 'Phone';

        return view('home.contact')->with($data);
    }
}
