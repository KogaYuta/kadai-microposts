<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];
    
    public function user() {
        // Micropostsはユーザーに所属する
        return $this->belongsTo(User::class);
    }
}
