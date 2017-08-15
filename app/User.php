<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'role_id','name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
          return $this->belongsTo('App\Role','role_id');

    }


}
