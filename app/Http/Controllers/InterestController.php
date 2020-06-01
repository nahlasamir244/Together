<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;

class InterestController extends Controller
{

    public function index(){
        /*$interests = [
            ["id"=>1,"name"=>"Dancing","img"=>"https://assets.foxdcg.com/dpp-uploaded/images/flirty-dancing/keyart-tab-lan_s1.jpg"],
            ["id"=>2,"name"=>"Development","img"=>"https://www.consignor.com/wp-content/uploads/2019/06/Senior-Front-End-Developer-1080x675.jpg"],
            ["id"=>3,"name"=>"HandMade","img"=>"https://www.seebtm.com/wp-content/uploads/handmade.jpg"],
            ];*/
            $interestsFromDB = Interest::all();
            //dd($interstsFromDB);
            //var_dump($interstsFromDB);
            //exit;
        return view("interests.index",["interests"=>$interestsFromDB]);
    }
    public function show($id){
        $singleInterest = Interest::findOrFail($id);
        //return ($singleInterest);
        //$singleInterest = Interest::where("id",$id)->first();
        if($singleInterest){
        return view('interests.show',['interest'=>$singleInterest]);
    }else{
        return  ("Content not avaliable ..!!");
    }
}
    public function create(){
        return view('interests.create');
    }
    public function edit($id){
        $singleInterest = Interest::findOrFail($id);
        if($singleInterest){
        return view('interests.edit',['interest'=>$singleInterest]);
    }else{
        return  ("Content not avaliable ..!!");
    }
    }
    public function update($id, Request $request){
        $singleInterest = Interest::findOrFail($id);
        $singleInterest->update([
            'name'=>$request->name,
            'img'=>$request->img,
            'description'=>$request->description,
        ]
        );
        return redirect()->route('interests.index');
    }
    public function store(Request $request){
       //note : this $request injected paramter is equal to request()
        //$data = request()->all(); //contains all the request data
        $img = request()->img;
        $description = request()->description;
        $name = request()->name;
        $interest = Interest::create(
            [
                'name'=>$name,
                'img'=>$img,
                'description'=>$description
            ]
        );
        //another way to insert new record ..
        //$interest1= new Interest;
        //$interest1->img=$img;
        // $interest1->desc=$desc;
        //$interest1->name=$name;
        //$interest1->save();
        //dd($interest);
        return redirect()->route('interests.index');
    }
    public function destroy($id){
        //Interest::where('id',$id)->delete(); in one single query ..
        $singleInterest = Interest::findOrFail($id);
        if($singleInterest){
        $singleInterest->delete();
        return redirect()->route('interests.index');
    }else{  
        return  ("Content not avaliable ..!!");
    }
}
}
