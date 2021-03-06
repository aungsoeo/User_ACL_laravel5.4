<?php

namespace App;

use Zizaco\Entrust\EntrustRole;
use Illuminate\Database\Eloquent\Model;

class Role extends EntrustRole
{
  protected $fillable = [
      'name', 'display_name', 'description',
  ];
  protected $table = 'roles';

  public function user()
  {
        return $this->belongsTo('App\User');

  }
}
