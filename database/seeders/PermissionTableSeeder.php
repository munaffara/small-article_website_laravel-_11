<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PermissionGroup;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = [
            [
                "name"=> "Article Create",
                'permission_group_id'=> PermissionGroup::where('name','Article')->first()->id,
            ],
            [
                "name"=> "Article List",
                'permission_group_id'=> PermissionGroup::where('name','Article')->first()->id,
            ],
            [
                "name"=> "Article Edit",
                'permission_group_id'=> PermissionGroup::where('name','Article')->first()->id,
            ],
            [
                "name"=> "Article Delete",
                'permission_group_id'=> PermissionGroup::where('name','Article')->first()->id,
            ],
            [
                "name"=> "User Create",
                'permission_group_id'=> PermissionGroup::where('name','User')->first()->id,
            ],
            [
                "name"=> "User List",
                'permission_group_id'=> PermissionGroup::where('name','User')->first()->id,
            ],
            [
                "name"=> "User Edit",
                'permission_group_id'=> PermissionGroup::where('name','User')->first()->id,
            ],
            [
                "name"=> "User Delete",
                'permission_group_id'=> PermissionGroup::where('name','User')->first()->id,
            ],
            [
                "name"=> "Role Create",
                'permission_group_id'=> PermissionGroup::where('name','Role')->first()->id,
            ],
            [
                "name"=> "Role List",
                'permission_group_id'=> PermissionGroup::where('name','Role')->first()->id,
            ],
            [
                "name"=> "Role Edit",
                'permission_group_id'=> PermissionGroup::where('name','Role')->first()->id,
            ],
            [
                "name"=> "Role Delete",
                'permission_group_id'=> PermissionGroup::where('name','Role')->first()->id,
            ],
            [
                "name"=> "Roles_Assign Create",
                'permission_group_id'=> PermissionGroup::where('name','Roles_Assign')->first()->id,
            ],
            [
                "name"=> "Roles_Assign List",
                'permission_group_id'=> PermissionGroup::where('name','Roles_Assign')->first()->id,
            ],
            [
                "name"=> "Roles_Assign Edit",
                'permission_group_id'=> PermissionGroup::where('name','Roles_Assign')->first()->id,
            ],
            [
                "name"=> "Roles_Assign Delete",
                'permission_group_id'=> PermissionGroup::where('name','Roles_Assign')->first()->id,
            ],
            [
                "name"=> "Profile_Setting Create",
                'permission_group_id'=> PermissionGroup::where('name','Profile_Setting')->first()->id,
            ],
            [
                "name"=> "Profile_Setting List",
                'permission_group_id'=> PermissionGroup::where('name','Profile_Setting')->first()->id,
            ],
            [
                "name"=> "Profile_Setting Edit",
                'permission_group_id'=> PermissionGroup::where('name','Profile_Setting')->first()->id,
            ],
            [
                "name"=> "Profile_Setting Delete",
                'permission_group_id'=> PermissionGroup::where('name','Profile_Setting')->first()->id,
            ]


        ];

        echo '----------------------------------------------------------------', "\n";
        echo '--------------------Permission  Seeding-------------------------', "\n";
        foreach ($permission as $key => $value) {
            $permission = new Permission;
            $permission->name = $value["name"];
            $permission->permission_group_id = $value["permission_group_id"];
            $permission->save();

            echo "-------------------Permission Name=> $permission->name--------------", "\n";
        }

        echo '-------------------------Permission Seeding Completed--------------', "\n";
    }
}
