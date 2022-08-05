<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }

    public function petugas()
    {
        return view('petugas');
    }
    
}
