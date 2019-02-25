<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function notices(){
        return $this->hasMany(Notice::class);
    }

    public function noticeComments(){
        return $this->hasMany(NoticeComment::class);
    }

    public function applies(){
        return $this->hasMany(Apply::class);
    }

    public function frees(){
        return $this->hasMany(Free::class);
    }

    public function freeComments(){
        return $this->hasMany(FreeComment::class);
    }

    //어드민
    public function isAdmin(){
        return $this->id === 1;
    }

}
