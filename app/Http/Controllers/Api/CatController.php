<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = Cat::all();
        return response()->json($cats);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'price'=>['required','numeric'],
            'description'=>'required',
            'birthdate'=>'required'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'success'=>false,
                'messages'=> $validator->errors()
            ]);
        }
        else
        {
            $cat = new Cat;
            $cat->name = $request->name;
            $cat->price = $request->price;
            $cat->description = $request->description;
            $cat->birthdate = $request->birthdate;
            $cat->save();
            return response()->json([
                'success'=>true,
                'messages'=>"Cat as been stored"
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cat = Cat::find($id);
        return response()->json($cat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'price'=>['required','numeric'],
            'description'=>'required',
            'birthdate'=>'required'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'success'=>false,
                'messages'=> $validator->errors()
            ]);
        }
        else
        {
            $cat = new Cat;
            $cat->name = $request->name;
            $cat->price = $request->price;
            $cat->description = $request->description;
            $cat->birthdate = $request->birthdate;
            $cat->save();
            return response()->json([
                'success'=>true,
                'messages'=>"Cat as been stored"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat=Cat::find($id);
        $cat->delete();
        return 'true';
    }
}
