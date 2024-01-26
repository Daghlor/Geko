<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'unique_id' => Str::uuid()->toString(),
            'name' => 'ADMIN',
            'lastName' => 'GENERAL',
            'identify' => 1111111111,
            'phone' => 111111111111,
            'dependence' => 'bogota',
            'email' => 'admin@engagement.com',
            'password' => bcrypt('Engagement.2023'),
            'dateBirth' => '1999/01/01',
        ])->assignRole('Administrador');
    }
}
