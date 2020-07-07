<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // public function scopeLatesFirst(){
    // 	return $this->latest()->first();
    // }

    //fillelable di gunakan untuk menentukan input yang boleh masuk ke database
    // $guarded = semua input di izinkan masuk tanpa terkecuali
    protected $fillable = ['title', 'slug', 'body'];

    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function tags(){
    	return $this->belongsToMany(Tag::class);
    }
}
