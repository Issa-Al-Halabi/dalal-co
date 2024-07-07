<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use BezhanSalleh\FilamentShield\Support\Utils;
use Spatie\Permission\PermissionRegistrar;

class ShieldSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[{"name":"super_admin","guard_name":"web","permissions":["view_any_role","view_role","create_role","update_role","delete_role","delete_any_role","view_any_user","view_user","create_user","update_user","delete_user","delete_any_user","replicate_user","reorder_user","view_maid","view_any_maid","create_maid","update_maid","restore_maid","restore_any_maid","replicate_maid","reorder_maid","delete_maid","delete_any_maid","force_delete_maid","force_delete_any_maid","view_contact::us","view_any_contact::us","create_contact::us","update_contact::us","restore_contact::us","restore_any_contact::us","replicate_contact::us","reorder_contact::us","delete_contact::us","delete_any_contact::us","force_delete_contact::us","force_delete_any_contact::us","view_law","view_any_law","create_law","update_law","restore_law","restore_any_law","replicate_law","reorder_law","delete_law","delete_any_law","force_delete_law","force_delete_any_law","view_order","view_any_order","create_order","update_order","restore_order","restore_any_order","replicate_order","reorder_order","delete_order","delete_any_order","force_delete_order","force_delete_any_order","restore_user","restore_any_user","force_delete_user","force_delete_any_user","widget_Filters","widget_StateWidget","widget_UsersChart","widget_OrdersChart"]},{"name":"user","guard_name":"web","permissions":[]}]';
        $directPermissions = '{"70":{"name":"replicate_role","guard_name":"web"},"71":{"name":"reorder_role","guard_name":"web"},"72":{"name":"view_any_panel","guard_name":"web"}}';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);

        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (!blank($rolePlusPermissions = json_decode($rolesWithPermissions, true))) {
            /** @var Model $roleModel */
            $roleModel = Utils::getRoleModel();
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = $roleModel::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name'],
                ]);

                if (!blank($rolePlusPermission['permissions'])) {
                    $permissionModels = collect($rolePlusPermission['permissions'])
                        ->map(fn ($permission) => $permissionModel::firstOrCreate([
                            'name' => $permission,
                            'guard_name' => $rolePlusPermission['guard_name'],
                        ]))
                        ->all();

                    $role->syncPermissions($permissionModels);
                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (!blank($permissions = json_decode($directPermissions, true))) {
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($permissions as $permission) {
                if ($permissionModel::whereName($permission)->doesntExist()) {
                    $permissionModel::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}
