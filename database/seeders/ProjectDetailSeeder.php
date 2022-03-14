<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projectDetail')->insert([
            [
            'title' => 'Marketing',
            'slug' => 'marketing',
            'content' => 'Sweet Go Agency'
            ],
            [
                'title' => 'Website',
                'slug' => 'website',
                'content' => 'Smart Ladies'
            ],
            [
                'title' => 'Branding',
                'slug' => 'branding',
                'content' => 'Shoes Factory'
            ],
            [
                'title' => 'Social Media',
                'slug' => 'sosial-media',
                'content' => 'Race Bicycle'
            ],
            [
                'title' => 'Video',
                'slug' => 'video',
                'content' => 'Ultimate Health Care'
            ]
        ]);
    }
}
