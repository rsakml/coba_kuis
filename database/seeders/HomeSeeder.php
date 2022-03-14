<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home')->insert([
            [
            'title' => 'Marketing',
            'slug' => 'marketing',
            'content' => 'Belajar Marketing'
            ],
            [
                'title' => 'Website',
                'slug' => 'website',
                'content' => 'Belajar Website'
            ],
            [
                'title' => 'Branding',
                'slug' => 'branding',
                'content' => 'Bbelajar Branding'
            ],
            [
                'title' => 'Social Media',
                'slug' => 'sosial-media',
                'content' => 'Belajar Social Media'
            ],
            [
                'title' => 'Video',
                'slug' => 'video',
                'content' => 'Belajar video'
            ]
        ]);
    }
}
