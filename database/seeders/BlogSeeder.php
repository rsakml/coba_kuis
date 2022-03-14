<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            [
            'title' => 'DESIGN',
            'slug' => ' design',
            'content' => 'Why Truly Accessible Design Benefits Everyone'
            ],
            [
                'title' => 'LIFESTYLE',
                'slug' => ' lifestyle',
                'content' => 'Be Humble About What You Know'
            ],
            [
                'title' => 'CODING',
                'slug' => ' coding',
                'content' => 'The Mistakes I Made As a Coding Beginner'
                ]
        ]);
    }
}
