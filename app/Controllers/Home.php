<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home BD',
            'activeOption' => 'home'
        ];
        return view('home_page', $data);
    }
}
