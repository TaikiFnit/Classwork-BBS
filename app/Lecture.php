<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
  public function bbs() {
    return $this->hasMany('App\Bbs');
  }
}
