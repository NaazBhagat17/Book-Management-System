<?php

namespace App\Http\Controllers;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $data['store']= Store::all();
        return view('store',$data);
        // return view('store');

    }

    
    public function insert(Request $request) {
        $request->validate(
            [
                'name'=>'required',
                'address'=>'required',
                'phone'=>'required',
                'description'=>'required',
                'email'=>'required|email',
                'owner'=>'required',
            ]
    
          );
      $st= new Store;
      $st->name=$request['name'];
      $st->address=$request['address'];
      $st->phone=$request['phone'];
      $st->description=$request['description'];
      $st->email=$request['email'];
      $st->owner=$request['owner'];
      $st->save();
      return redirect('/store');


     
     }
     public function edit($id){
        $store=Store::find($id);
        return view('editstore',['store'=>$store]);
     }
     public function view($id){
        $store=Store::find($id);
        return view('viewstore',['store'=>$store]);
     }

     




     public function update(Request $request,$id){
        $store=Store::find($id);
      $store->name=$request['name'];
      $store->address=$request['address']; 
      $store->phone=$request['phone'];
      $store->description=$request['description'];
      $store->email=$request['email'];
      $store->owner=$request['owner'];
      $store->status=$request['status'];
      $store->save();
      return redirect('/store');
     }

     public function destroy($id){
           Store::destroy($id);
           return redirect('/store');
     }

     public function listing(){
        
        
        $stores= Store::all();

        return view('storelisting',compact(['stores']));
       
    }

}

