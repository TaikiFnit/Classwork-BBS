<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  public function lecture() {
    return $this->belongsTo('App\Lecture');
  }
}
