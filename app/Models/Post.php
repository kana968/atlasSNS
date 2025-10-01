<?php
// postsテーブル　と連動
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
        // hasMany　と belongsTo　は対で使う
    }
}
