<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Test::create([
            'name' => 'Lzjh isdi hdf ',
        ]);

        Test::create([
            'name' => 'AZhqbduhb isdi hdf ',
        ]);

        Test::create([
            'name' => 'Dshbdv isdi hdf ',
        ]);

        Test::factory(100)->create();
    }
}
