<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'text',
        'author',
        'publication_date'
    ];

    public function infoPost() {
        return $this->hasOne('App\infoPost');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
