<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    //index
    public function index()
    {
        $cats = Cat::all();
        return view('index', compact('cats'));
    }

    // show
    public function show($id)
    {
        $thatCat = Cat::findOrFail($id);
        return view('show', compact ('thatCat'));
    }

    // create
    public function create()
    {
        return view('create');
    }

    // store
    public function store()
    {
        $validate = request()->validate([
            'name' => 'required',
            'price' => 'integer|required',
        ]);
        $c = new Cat;
        $c->name = request('name');
        $c->price = request('price');
        $c->description = request('description');
        $c->image = request('image');
        $c->birthdate = request('birthdate');
        $c->save();
        return redirect('/cats/'.$c->id);
    }

    // edit
    public function edit($id)
    {
        $cat = Cat::find($id);
        return view('edit', compact('cat'));
    }

    // update
    public function update($id)
    {
        $validate = request()->validate([
            'name' => 'required',
            'price' => 'integer|required',
            'description' => 'required',
            'birthdate' => 'required',
            'image' => 'nullable|url'
        ]);
//    $c = new Cat;
        $c= Cat::find($id);
        $c->name = request('name');
        $c->price = request('price');
        $c->description = request('description');
        $c->image = request('image');
        $c->birthdate = request('birthdate');
        $c->save();
        return redirect('/cats/'.$c->id);
    }

    // destroy
    public function destroy($id)
    {
        $c = Cat::find($id);
        $c->delete();
        return redirect('/cats');
    }
}
