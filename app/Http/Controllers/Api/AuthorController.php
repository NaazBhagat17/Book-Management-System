<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $author = Author::all();
        
        if($author->count()>0){
            return response()->json([
                'status'=>200,
                'authors'=>$author,
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'authors'=>'NO Record Found',
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(),
        [
            'name'=>'required|min:3|max:191',
            'image'>'required',
            'intro'=>'required|min:5|max:500',
            
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>422,
                'meassage'=>$validator->messages()
            ],422);

        }
        else{
            $author=new Author;
            $author->name=$request->name;
            if($request->hasfile('image')){
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/author/',$filename);
                $author->image = $filename;
            }
            $author->intro=$request->intro;
            $author->save();
            return response()->json([
                'status'=>200,
                'meassage'=>'author Created Successfully'
            ],200);
        
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
