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
            'nim_nidn' => '1234567890',
            'role' => 'administrator',
            'alamat' => 'Jakarta',
            'kontak' => '@hansarwa',
            'email' => 'hansarwa@gmail.com',
            'password' => bcrypt('123456')
        ]);
            User::create([
            'name' => 'Sarwa Han',
            'username' => 'sarwahan',
            'nim_nidn' => '1810120013',
            'role' => 'student',
            'alamat' => 'Bogor',
            'kontak' => '@sarwahan',
            'email' => 'sarwahan@gmail.com',
            'password' => bcrypt('123456')
        ]);
        
            User::create([
            'name' => 'Hawa Saran',
            'username' => 'hawasaran',
            'nim_nidn' => '0987654321',
            'role' => 'lecturer',
            'alamat' => 'Bandung',
            'kontak' => '@hawasaran',
            'email' => 'hawasaran@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
