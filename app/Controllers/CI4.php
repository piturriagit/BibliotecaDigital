<?php

namespace App\Controllers;

class CI4 extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
