<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

class CommentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $posts = Post::all()-> each(function($post, $key){
      $comments = Comment::factory()-> count(10)->for(
        $post, 'commentable'
      )->create();
    });

    $users = User::all()-> each(function($user, $key){
      $comments = Comment::factory()-> count(5)->for(
        $user, 'commentable'
      )->create();
    });
  }
}
