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
    
    // お気に入り機能用の関数
    public function favorite_users() {
        // クラス名、中間テーブル、リレーションを定義しているモデル(自身)の外部キー名, 結合するモデルの外部キー(相手)のid
        return $this->belongsToMany(User::class, 'user_favorite', 'micropost_id', 'user_id')->withTimestamps();
    }
    
}
