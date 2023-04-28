<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\book;
use Illuminate\Support\Facades\Validator;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();
        if($book->count()>0){
            return response()->json([
                'status'=>200,
                'authors'=>$book,
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
            'image',
            'intro'=>'required|min:10|max:1000',
            'published_on'=>'required',
            'genres'=>'required|max:191',
            'author_id'=>'min:1|max:191',
            'store_id'=>'min:1|max:191',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>422,
                'meassage'=>$validator->messages()
            ],422);

        }
        else{
            $book=new Book;
            $book->name=$request->name;
            if($request->hasfile('image')){
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/books/',$filename);
                $book->image = $filename;
            }
            $book->intro=$request->intro;
            $book->published_on=$request->published_on;
            $book->genres=$request->genres;
            $book->author_id=$request->author_id;
            $book->store_id=$request->store_id;
            $book->save();
            
            return response()->json([
                'status'=>200,
                'meassage'=>'book Created Successfully'
                
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
    public function upload(Request $req){
        $result=$req->file('file1')->store('apidocs');
        // return ["result"=>"pass"];
    }
}
