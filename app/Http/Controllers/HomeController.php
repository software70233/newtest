<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index(Request $request){
       $res = DB::table('userinfo')->get()->toArray();
        return view('homes',compact('res'));
    }

    public function addmore(Request $request){
       return view('addmoreDetails');
    }

    public function addmorepost(Request $request){
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile
        ];
        DB::table('userinfo')->insert($data);
        return redirect()->route('home');
    }
}
