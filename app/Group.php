<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name','img','description','interest_id'];
    public function interest(){
        return $this->belognsTo(Interest::class);
    }
}
