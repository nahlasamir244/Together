<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = ['name','img','description'];

    public function groups(){
        return $this->hasMany(Group::class);
    }
}
