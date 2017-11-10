<?php

namespace App\Http\Controllers;

use App\Ad;


class AdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);

    }

    public function index()
    {
        $ads = Ad::latest()->Paginate(5);

        return view('ads.index', compact('ads'));
    }

    public function edit(Ad $id)
    {

        return view('ads.edit', ['ad' => $id]);
    }

    public function store()
    {
        $this->validate(request(), [
          'title' => 'required',
          'description' => 'required',
        ]);

        if (request('id')) {
            $ad = Ad::find(request('id'));
            $ad->title = request('title');
            $ad->description = request('description');
            $ad->save();
        } else {
            $ad = Ad::create([
              'title' => request('title'),
              'description' => request('description'),
              'user_id' => auth()->user()->id,
            ]);
        }

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