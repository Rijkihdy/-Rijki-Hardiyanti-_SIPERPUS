<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class RoleSeeder extends Seeder
{
   
    public function run(): void
    {
        Role::create(["name" => "pustakawan"]);
        Permission::create(['name' => 'edit_users']);
        Role::create(["name" => "mahasiswa"]);
        Permission::create(['name' => 'view_book']);

    }
}
