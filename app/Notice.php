<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'title',
        'content',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function noticeComments(){
        return $this->hasMany(NoticeComment::class);
    }
}
