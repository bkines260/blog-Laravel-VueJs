<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;
use App\Models\Comments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $guarded =[''];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getRouteKeyName(){
        return'slug';
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
