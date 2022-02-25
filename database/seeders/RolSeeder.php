<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        //
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Doctor']);

        Permission::create(['name' => 'admin.home', 'description' => 'Ver Dashboard'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.prueba', 'description' => 'prueba'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.especies.index', 'description' => 'Ver Listado de Especies'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.especies.create', 'description' => 'Crear Nuevas Especies'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.especies.edit', 'description' => 'Editar Especies'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.especies.delete', 'description' => 'Eliminar Especies'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.personas.index', 'description' => 'Ver Listado de Personas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.personas.create', 'description' => 'Crear Nuevas Personas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.personas.edit', 'description' => 'Editar Personas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.personas.delete', 'description' => 'Eliminar Personas'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.razas.index', 'description' => 'Ver Listado de Razas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.razas.create', 'description' => 'Crear Nuevas Razas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.razas.edit', 'description' => 'Editar Razas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.razas.delete', 'description' => 'Eliminar Razas'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.roles.index', 'description' => 'Ver Listado de Roles'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.roles.create', 'description' => 'Crear Nuevas Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit', 'description' => 'Editar Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.delete', 'description' => 'Eliminar Roles'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver Listado de Usuarios'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.create', 'description' => 'Crear Nuevas Usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Editar Usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.delete', 'description' => 'Eliminar Usuarios'])->syncRoles([$role1]);


        $user = \App\Models\User::factory()->create([
            'name' => 'caal2096',
            'email' => 'caal2096@gmail.com',
            'password' => bcrypt('1234')
        ]);
        $user->assignRole($role1);
    }
}
