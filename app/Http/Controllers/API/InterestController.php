<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\InterestResource;
use App\Http\Resources\GroupResource;
use App\Interest;

class InterestController extends Controller
{
    //we need to add validation
    //handle request and response headers , params
    //handle case not found and unauthorized ..
    public function index(){
        $interests= Interest::all();
        $interestResource = InterestResource::collection($interests);
        //dd($interestResource);
        return $interestResource;
    }
    public function  show(){
        $interestId = request()->interest;
        $interest = Interest::find($interestId);
        return new InterestResource($interest);
    }
    public function  groups(){
        $interestId = request()->interest;
        $interest = Interest::find($interestId);
        $groups =  $interest->groups;
        $groupResource = GroupResource::collection($groups);
        return $groupResource;
    }
}
