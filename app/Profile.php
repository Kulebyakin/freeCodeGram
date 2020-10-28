<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/409QDee3Skdk8HpUb5mRke0AHtUoC6CsYegIelz2.jpeg';
        return '/storage/' . $imagePath;
    }

    Public function user()
    {
        return $this->belongsTo(User::class);
    }
}
