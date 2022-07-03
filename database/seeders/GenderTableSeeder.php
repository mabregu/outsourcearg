<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = [
            ['name' => 'Female'],
            ['name' => 'Male'],
            ['name' => 'Other'],
        ];

        \App\Models\Gender::insert($genders);

        $this->command->info('Genders table seeded!');
    }
}
