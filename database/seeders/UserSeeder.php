<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'prenom' => 'Admin',
            'pseudo' => 'admin',
            'email' => 'admin@gmail.com',
            'is_admin' => true,
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'User',
            'prenom' => 'User',
            'pseudo' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user')
        ]);

        User::factory(10)->create();

    }
}
