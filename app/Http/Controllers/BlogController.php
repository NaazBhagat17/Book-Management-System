<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Cms;
use Illuminate\Http\Request;
class CmsController extends Controller
{    
    public function index(){
        $data = Cms::all();
        return view('cms')->with('data',$data);
    }
    public function about(){
        $cms =Cms::where('slug','about')->firstOrFail();
        $cms2 =Cms::where('slug','about2')->firstOrFail();
        return view('about',compact(['cms','cms2']));
    }
    public function edit($id){
        $cms = Cms::find($id);
        return view('editcms')->with('cms',$cms);
    }
    public function update(Request $request,$id){
        $cms=Cms::find($id);
        $cms->title=$request['title'];
        $cms->slug=$request['slug'];
        $cms->content=$request['content'];
        $cms->save();
        return redirect('/cms');
    }
}
