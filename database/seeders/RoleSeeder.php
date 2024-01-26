<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Evaluador-admin']);
        $role3 = Role::create(['name' => 'Evaluador']);
        $role4 = Role::create(['name' => 'Estudiante']);

        Permission::create(['name' => 'ver dashboard'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'ver informes'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'ver colaboradores a evaluar'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'ver evaluaciones'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'asignar evaluadores'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'ver mis competencias'])->syncRoles([$role1, $role4]);

        Permission::create(['name' => 'admin.importarexcel'])->assignRole($role1);

        Permission::create(['name' => 'admin.users.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.update'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.employments.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.employments.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.employments.update'])->assignRole($role1);
        Permission::create(['name' => 'admin.employments.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.areas.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.areas.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.areas.update'])->assignRole($role1);
        Permission::create(['name' => 'admin.areas.destroy'])->assignRole($role1);
    }
}
