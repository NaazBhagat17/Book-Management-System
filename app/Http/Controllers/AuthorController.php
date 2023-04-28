<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Datatables;

class AuthorController extends Controller
{
    public function index(){
        $data = Author::all();
        return view('author')->with('data',$data);
    }
    public function register(Request $request){      
        $request->validate(
            [
                    'name' => 'required',
                    'intro' => 'required'
            ]
        );

        $au = new Author;
        $au->name=$request['name'];
        $au->image=$request['image'];
        $au->intro=$request['intro'];

        $au->save();
    }

    public function save(Request $request){
        $author = new Author();

        $author->name = $request->input('name');
        $author->intro = $request->input('intro');
    
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/author/',$filename);
            $author->image = $filename;
        }else{
            return $request;
            $auhtors->image = '';
        }

        $author->save();
        return redirect('/regauthor');
    }

    public function edit($id){
        $author = Author::find($id);
        return view('editauthor')->with('author',$author);
    }
    public function update(Request $request,$id){
        $author=Author::find($id);
        $author->name=$request['name'];
        $author->intro=$request['intro'];

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/author/',$filename);
            $author->image = $filename;
        }

        $author->save();

        return redirect('/regauthor');
     }

     public function destroy($id){
        Author::destroy($id);
        return redirect('/regauthor');
     }
     public function view($id){
        $author=Author::find($id);
        return view('viewauthor',['author'=>$author]);
     }
     public function listing(){
      
        $authors = Author::all();
      
        return view('authorlisting',compact(['authors']));
        // $books = Book::join('authors','books.author_id','=','authors.id' )
        // ->select('authors.name AS aname','books.id','books.name','books.image','books.intro','books.published_on','books.genres','books.store_id','books.author_id','authors.id')
        // ->where('authors.id',$id)->get();
        // return view('books')->with('books',$books);
    }
}