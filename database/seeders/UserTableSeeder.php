<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        echo '-----------------------------------------------------', "\n";
        echo '-------------------User Seeding---------------------', "\n";
        // Create user
        $user           = new User;
        $user->name     = "Super Admin";
        $user->email    = "superadmin@gmail.com";
        $user->password = bcrypt("password123");
        $user->save();

        echo '-------------------User Created---------------------', "\n";
        echo '-----------------------------------------------------', "\n";
        echo "---------Assinging Super role to => .$user->email.------------", "\n";

        // Role Assign
        $user->assignRole("Super Admin");
        echo "---------Assinging Super role to => .$user->email. completed------------", "\n";
        echo '-------------------User Seeding Completed---------------', "\n";
    }
}
