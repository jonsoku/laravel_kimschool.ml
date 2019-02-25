<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = [
        'applyName',
        'applyAge',
        'applyGender',
        'applyJapanese',
        'applyVisa',
        'applyHistory',
        'applySns',
        'applyJava1',
        'applyWeb1',
        'applyJava2',
        'applyWeb2',
        'applyJava3',
        'applyWeb3',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
