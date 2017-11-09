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
        //var_dump($ads[1]->created_at);
        //die;
        return view('ads.index', compact('ads'));

    }

    public function edit()
    {
        return view('ads.edit');


    }

    public function store()
    {
        $this->validate(request(), [
          'title' => 'required',
          'description' => 'required',
        ]);

        $ad = Ad::create([
          'title' => request('title'),
          'description' => request('description'),
          'user_id' => auth()->user()->id,
        ]);


        return redirect('/'.$ad->id);
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