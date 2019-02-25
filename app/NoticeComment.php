<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticeComment extends Model
{
    protected $fillable = [
        'body',
        'notice_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function notice(){
        return $this->belongsTo(Notice::class);
    }
}
