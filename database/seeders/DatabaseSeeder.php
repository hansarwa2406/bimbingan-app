<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Han Sarwa',
            'username' => 'hansarwa',
            'email' => 'hansarwa@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
