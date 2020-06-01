<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\GroupResource;
use App\Group;

class GroupController extends Controller
{
    public function index(){
        $groups= Group::all();
        $groupResource = GroupResource::collection($groups);
        return $groupResource;
    }
    public function search(){
        $searchKeyword = request()->query('q');
        $groups = Group::where('name', 'like', "%{$searchKeyword}%")->get();
        $groupResource = GroupResource::collection($groups);
        return $groupResource;
    }
}
