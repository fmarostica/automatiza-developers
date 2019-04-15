<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    public $fillable = ['title', 'slug', 'short_desc'];
}
