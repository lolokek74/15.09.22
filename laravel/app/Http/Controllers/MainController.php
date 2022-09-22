<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Главная страница
     * @return mixed
     */
    public function index()
    {
        return view('Welcome');
    }
}
