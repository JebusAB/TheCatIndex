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
    public function show(Cat $cat)
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
    public function edit(Cat $cat)
    {
        return view('edit', compact('cat'));
    }

    // update
    public function update(Cat $cat)
    {
        $validate = request()->validate([
            'name' => 'required',
            'price' => 'integer|required',
            'description' => 'required',
            'birthdate' => 'required',
            'image' => 'nullable|url'
        ]);
        $Cat->name = request('name');
        $Cat->price = request('price');
        $Cat->description = request('description');
        $Cat->image = request('image');
        $Cat->birthdate = request('birthdate');
        $Cat->save();
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
