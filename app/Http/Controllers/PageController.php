<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function hello(string $nama)
    {
        return view('hello', ['nama' => ucfirst($nama)]);
    }
}