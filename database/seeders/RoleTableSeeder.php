<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        echo '-----------------------------------------------------', "\n";
        echo '----------------------Role  Seeding------------------', "\n";

        $role = new Role;
        $role->name = "Super Admin";
        $role->save();

        echo "----------------------Role  Added=> $role->name------------------", "\n";
        echo '-----------------------------------------------------', "\n";

        echo "-----------------Assigning All Permission to ' . $role->name . '--------------", "\n";

        $permission = Permission::get();

        // give the all permission to this user role
        foreach ($permission as $key => $value) {
            $role->givePermissionTo($value->name);
            echo "-----------------Added Permission name ' . $role->name . '--------------", "\n";
        }

        echo '-----------------Role Seeding Completed--------------', "\n";
        echo '-----------------------------------------------------', "\n";
    }
}
