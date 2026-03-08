<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Contact BD'];
        $data = ['activeOption' => 'contact'];
        return view('contact_page', $data);
    }
}
