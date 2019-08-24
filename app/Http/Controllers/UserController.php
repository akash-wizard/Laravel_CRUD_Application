<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Details;
use Hash;
class UserController extends Controller
{
    public function store(Request $request){
    	// dd($request->all());
    	$Details = new Details();
    	$Details->email=$request->email;
    	$Details->password=Hash::make($request->password);
    	$Details->save();
    	return redirect('/read_data');
    }
    public function read(Request $request){
    	$data=Details::all();
    	// dd($data);
    	return view('read' , compact('data'));

    }
    public function delete(Request $request , $id){
    	// dd($id);
    	$data=Details::where('id' , $id)->first();
    	// dd($data);
    	$data->delete();    
    	return redirect('/read_data');

    }
    public function edit(Request $request , $id){
    	// dd($id);
    	$data=Details::where('id' , $id)->first();
    	// dd($data);
    	// $data->delete();    
    	return view('edit' , compact('data'));

    }
    public function update(Request $request , $id){
    	// dd($request->all());
    	$data=Details::where('id' , $id)->first();
    	$data->email=$request->email;
    	$data->password=$request->password;
    	$data->save();
    	return redirect('/read_data');
    }

}
