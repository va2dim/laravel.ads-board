<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth')->except(['index', 'show']);

    }

    public function index()
    {
        return view('ads.index');
    }
}
