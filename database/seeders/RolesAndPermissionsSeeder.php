<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
// Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'manager']);
        $userRole = Role::create(['name' => 'user']);

// Create permissions
        $permission1 = Permission::create(['name' => 'create tasks']);
        $permission2 = Permission::create(['name' => 'edit tasks']);
        $permission3 = Permission::create(['name' => 'view tasks']);
        $permission4 = Permission::create(['name' => 'delete tasks']);

// Assign permissions to roles
        $adminRole->givePermissionTo([$permission1, $permission2, $permission3, $permission4]);
        $managerRole->givePermissionTo([$permission1, $permission2, $permission3]);
        $userRole->givePermissionTo([$permission3]);

// Assign role to the user

    }
}
