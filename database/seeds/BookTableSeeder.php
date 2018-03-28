<?php

use Illuminate\Database\Seeder;
use App\Author;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $maxauthors = Author::all()->count();
      DB::table('books')->insert([
            'title' => str_random(rand(4,20)),
            'author_id' => rand(1,$maxauthors),
            'description' => str_random(rand(4,40)),
        ]);
    }
}
