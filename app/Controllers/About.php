<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = ['title' => 'About BD'];
        $data = ['activeOption' => 'about'];
        return view('about_page', $data);
    }
}
