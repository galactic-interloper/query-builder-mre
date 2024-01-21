<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enums\Roles;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        foreach (Roles::cases() as $role) {
            /** @var Roles $role */

            $user = User::factory()->create();
            /** @var User $user */

            $role = Role::firstOrCreate([
                'id' => $role->value,
            ]);
            /** @var Role $role */

            /**
             * $role->id is correctly casted to a App\Enums\Roles
             * instance in this case.
            */
            $user->roles()->sync([$role->id->value]);

            $role->permissions()->create([]);
        }
    }
}
