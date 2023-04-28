<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Author;
use App\Models\Store;


use Illuminate\Http\Request;

class BookController extends Controller
{   
    
    public function index(){
        $books = Book::all();
        $authors = Author::all();
        $stores= Store::all();
        return view('books',compact(['stores','authors','books']));
        // $books = Book::join('authors','books.author_id','=','authors.id' )
        // ->select('authors.name AS aname','books.id','books.name','books.image','books.intro','books.published_on','books.genres','books.store_id','books.author_id','authors.id')
        // ->where('authors.id',$id)->get();
        // return view('books')->with('books',$books);
    }
    public function listing(Request $request){
        $books = Book::all();
        $authors = Author::all();
        $stores= Store::all();
        
        if($request->author_id){
         
            // exit();
            $books = Book::where('author_id',$request->author_id)->get();
        // return view('books')->with('books',$books);
        }
        if($request->store_id){
         
            // exit();
            $books = Book::where('store_id',$request->store_id)->get();
        // return view('books')->with('books',$books);
        }
        // return view('booklisting',compact(['stores','authors','books']));
        return view('booklisting',compact(['stores','authors','books']));
       
    }

    

    public function addbook(){
        $genres = Genre::all();
        $author= Author::all();
        $store= Store::all();
        return view('addbook',compact(['genres','author','store']));
    }


    public function save(Request $request){
        $book = new Book();

        $book->name = $request->input('name');
        
    
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/books/',$filename);
            $book->image = $filename;
        }else{
            return $request;
            $book->image = '';
        }
        $book->intro = $request->input('intro');
        $book->published_on = $request->input('published_on');
        $book->genres = $request->input('genres');
        $book->author_id = $request->input('author_id');
        $book->store_id = $request->input('store_id');
        $book->save();
        return redirect('/regbook');
    }
    public function view($id){
        $book=Book::find($id);
        $author= Author::all();
        $store= Store::all();
        return view('viewbook',compact(['book','author','store']));
     }
     public function edit($id){
        $books=Book::find($id);
        $genres = Genre::all();
        $author= Author::all();
        $store= Store::all();
        return view('editbook',compact(['genres','author','store','books']));
        // return view('editbook',['books'=>$books]);
     }
     public function update(Request $request,$id){
        $book=Book::find($id);
        $book->name=$request['name'];
        $book->intro=$request['intro'];
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/books/',$filename);
            $book->image = $filename;
        }
        $book->genres = $request['genres'];
        $book->author_id = $request['author_id'];
        $book->store_id = $request['store_id'];

        $book->save();

        return redirect('/regbook');
     }
     public function destroy($id){
        Book::destroy($id);
        return redirect('/regbook');
     }
}
