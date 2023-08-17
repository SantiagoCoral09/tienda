<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('directorio/index)
        return view('main');
    }
}
