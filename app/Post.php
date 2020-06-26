<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function scopeLatesFirst(){
    	return $this->latest()->first();
    }
}
