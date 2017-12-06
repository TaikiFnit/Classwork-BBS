<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function school() {
    return $this->belongsTo('App\School');
  }

  public function group() {
    return $this->belongsTo('App\Group');
  }
}
