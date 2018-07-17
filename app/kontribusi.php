<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class kontribusi extends Model
{
    protected $table = 'kontribusi';
    public function user(){
    	return $this->belongsToMany('App\User');
    }
}
