<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function index()
    {
        return view('site/index');
    }
}
