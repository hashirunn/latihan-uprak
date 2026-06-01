<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        Role::create(['name' => 'pustakawan']);
        Role::create(['name' => 'pengunjung']);

        User::create([
            'username' => 'Pustakawan',
            'email' => 'pustakawan@unsur.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now()
        ])->assignRole('pustakawan');

        for($i = 0; $i < 20; $i++){
            User::create([
                'username' => $faker->firstName,
                'email' => $faker->email,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'created_at' => now()
            ])->assignRole('pengunjung');
        }
    }
}
