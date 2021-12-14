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
            'role' => 'administrator',
            'email' => 'hansarwa@gmail.com',
            'password' => bcrypt('123456')
        ]);
            User::create([
            'name' => 'Sarwa Han',
            'username' => 'sarwahan',
            'role' => 'student',
            'email' => 'sarwasar@gmail.com',
            'password' => bcrypt('123456')
        ]);
        
            User::create([
            'name' => 'Hawa Saran',
            'username' => 'hawasaran',
            'role' => 'lecturer',
            'email' => 'hawasaran@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
