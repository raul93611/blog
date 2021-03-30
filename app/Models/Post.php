<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use App\Models\Tag;

class Post extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'description',
  ];

  public function user(){
    return $this-> belongsTo(User::class);
  }

  public function comments(){
    return $this-> morphMany(Comment::class, 'commentable');
  }

  public function tags(){
    return $this-> morphToMany(Tag::class, 'taggable');
  }
}
