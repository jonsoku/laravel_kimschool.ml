<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Free extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function freeComments(){
        return $this->hasMany(FreeComment::class);
    }
}
