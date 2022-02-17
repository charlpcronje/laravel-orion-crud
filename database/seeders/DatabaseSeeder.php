<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::factory(3)->create(['category' => 'Laravel Orion']);
        \App\Models\Post::factory(3)->create(['category' => 'Laravel Tips']);
        \App\Models\Post::factory(3)->create(['category' => 'Vue Tips']);
        \App\Models\Post::factory(3)->create(['category' => 'Coding Tips']);
        \App\Models\Post::factory(3)->create(['category' => 'Secure Zone']);
    }
}
