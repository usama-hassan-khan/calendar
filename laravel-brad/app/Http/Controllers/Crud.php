<?php

namespace App\Http\Controllers;
use App\Models\crudmod;

use Illuminate\Http\Request;

class Crud extends Controller
{
    public function index(){
        // return view("welcome");
        // $alldata['data']= crudmod::all();
        // $alldata['employee']= crudmod::all();
        // $alldata['teachers']= crudmod::all();
    //    return crudmod::all();
         $alldata=crudmod::all();
        return view('welcome')->with("alldata",$alldata);
        //  return view('welcome',compact('alldata'));
    }
    public function store(Request $request){
        $user_data = new Crudmod();
        $name = $request->name;
        $title = $request->title;
       
        $user_data->name = $name;
        $user_data->title = $title;
      
        $user_data->save();
        return redirect('/crud');
    }
    public function edit($id){
        $datas = crudmod::find($id);
        return view('editdata',compact('datas'));
        // return view('editdata')->with("datas",$datas);
    
    }
    public function update(Request $request){
        $data = crudmod::find($request->id);
    $data->name = $request->name;
    $data->title = $request->title;
  
    $data->save();
    return redirect('/crud');
    
    }
   
    public function destroy($id){
        $data = crudmod::find($id);
        $data->delete();
        return redirect('/crud');
    }


}
