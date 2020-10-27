<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    Public function user()
    {
        return $this->belongsTo(User::class);
    }
}
