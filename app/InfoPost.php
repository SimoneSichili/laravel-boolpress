<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoPost extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'post_status',
        'comment_status'
    ];

    public function post() {
        return $this->belongsTo('App\Post');
    }
}
