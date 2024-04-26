<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    public function store()
    {
        return 'nenhum';
    }
}
