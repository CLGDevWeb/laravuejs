<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(5) // 5 Users
            ->hasPosts(10) // avec 10 Posts chacuns
            ->create(); // soit 15 Posts
    }
}
