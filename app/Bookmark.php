<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    public $timestamps = false;

    public function bookmarkable()
    {
        return $this->morphTo();
    }
}
