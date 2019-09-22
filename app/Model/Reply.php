<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question()
    {
        return $this->belgongTo(Question::class);
    }
    public function user()
    {
        return $this->belongTo(User::class);
    }
    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
