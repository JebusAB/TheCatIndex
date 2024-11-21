<?php

namespace App\Http\Controllers;


use App\Models\Cat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        //$thatCat = Cat::findOrFail($cat);
        return view('show', compact ('cat'));
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
        $cat->name = request('name');
        $cat->price = request('price');
        $cat->description = request('description');
        $cat->image = request('image');
        $cat->birthdate = request('birthdate');
        $cat->save();
        return redirect('/cats/'.$cat->id);
    }

    // destroy
    public function destroy($id)
    {
        $c = Cat::find($id);
        $c->delete();
        return redirect('/cats');
    }
}
