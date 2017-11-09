<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth')->except(['index', 'show']);

    }

    public function index()
    {
        $ads = Ad::latest()->simplePaginate(5);
        return view('ads.index', compact('ads'));

    }

    public function create()
    {
        return view('ads.create');


    }

    public function store()
    {

    }

    public function show(Ad $id)
    {

        return view('ads.show', ['ad' => $id]);
    }

    public function destroy(int $id)
    {
        Ad::destroy([$id]);

        return redirect()->home();
    }


}