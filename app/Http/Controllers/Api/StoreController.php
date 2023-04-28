<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\store;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $store = Store::all();
        if($store->count()>0){
            return response()->json([
                'status'=>200,
                'authors'=>$store,
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
            'address'=>'required|min:3|max:191',
            'phone'=>'required|min:10|max:10',
            'description'=>'required',
            'email'=>'required|email|max:191',
            'owner'=>'required|min:3|max:191',
            'status'=>'required|min:1|max:191',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>422,
                'meassage'=>$validator->messages()
            ],422);

        }
        else{
            $store=new Store;
            $store->name=$request->name;
            $store->address=$request->address;
            $store->phone=$request->phone;
            $store->description=$request->description;
            $store->email=$request->email;
            $store->owner=$request->owner;
            $store->status=$request->status;
            $store->save();
            return response()->json([
                'status'=>200,
                'meassage'=>'Store Created Successfully'
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
