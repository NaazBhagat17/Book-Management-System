<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Cms;
use Illuminate\Http\Request;
class CmsController extends Controller
{
    public function home(){
        $cms =Cms::where('slug','home')->firstOrFail();
        return view('home',compact('cms'));
    }
    public function about(){
        $cms =Cms::where('slug','about')->firstOrFail();
        $cms2 =Cms::where('slug','about2')->firstOrFail();
        return view('about',compact(['cms','cms2']));
    }
    public function contact(){
        $cms =Cms::where('slug','contact')->firstOrFail();
        
        $phone =Cms::where('slug','phone')->firstOrFail();
        
        $email =Cms::where('slug','email')->firstOrFail();

        $address =Cms::where('slug','address')->firstOrFail();
        return view('contact',compact(['email','cms','phone','address']));
    }
    public function index(){
        $data = Cms::all();
        return view('cms')->with('data',$data);
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
