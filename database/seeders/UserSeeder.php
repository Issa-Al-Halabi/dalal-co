<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user =  User::firstOrCreate([
            "name" => "mousa",
            "email" => "mousa@gmail.com",
            "phone" => "0987654321",
            "password" => Hash::make("qwer1234")
        ]);
        $user->assignRole("super_admin");

        $issa =  User::firstOrCreate([
            "name" => "issa",
            "email" => "issa@gmail.com",
            "phone" => "0987654321",
            "password" => Hash::make("qwer1234")
        ]);
        $issa->assignRole("super_admin");
    }
}
