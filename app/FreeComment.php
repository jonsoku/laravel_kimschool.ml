<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreeComment extends Model
{
    protected $fillable = [
        'body',
        'free_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function free(){
        return $this->belongsTo(Free::class);
    }
}
