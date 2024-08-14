<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PermissionGroup;

class PermissionGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionGroup = [
            [
                "name"=> "Article",
            ],
            [
                "name"=> "User",
            ],
            [
                "name"=> "Role",
            ],
            [
                "name"=> "Roles_Assign",
            ],
            [
                "name"=> "Profile_Setting",
            ]
        ];

        echo '--------------------------------------------------', "\n";
        echo '-----------Permission Group Seeding--------------', "\n";

        foreach ($permissionGroup as $key => $value) {
            $permissionGroup = new PermissionGroup;
            $permissionGroup->name = $value["name"];
            $permissionGroup->save();

            echo "-----------Permission Group Name=> $permissionGroup->name--------------", "\n";
        }

        echo '-----------Permission Group Seeding Completed--------------', "\n";
    }
}
