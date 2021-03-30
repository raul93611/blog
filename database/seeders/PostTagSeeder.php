<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class PostTagSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $tags = Tag::all()-> pluck('id')-> toArray();
    $posts = Post::all()-> each(function($post, $key) use ($tags){
      $post-> tags()-> attach(array_rand($tags, 3));
    });
  }
}
