<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
  public function lectures() {
    return $this->hasMany('App\Lecture');
  }
}
