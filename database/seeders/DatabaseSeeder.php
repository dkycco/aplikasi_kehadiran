<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        Permission::create(['name' => 'view dashboard']);
        Permission::create(['name' => 'view configuration']);
        Permission::create(['name' => 'view master data']);
        Permission::create(['name' => 'view akademik']);
        Permission::create(['name' => 'view apps', 'guard_name' => 'mahasiswa']);

        $adminRole = Role::create(['name' => 'admin']);
        $dosenRole = Role::create(['name' => 'dosen']);
        $mahasiswaRole = Role::create(['name' => 'mahasiswa', 'guard_name' => 'mahasiswa']);

        $adminRole->givePermissionTo('view dashboard');
        $adminRole->givePermissionTo('view configuration');
        $adminRole->givePermissionTo('view master data');

        $dosenRole->givePermissionTo('view dashboard');
        $dosenRole->givePermissionTo('view akademik');

        $mahasiswaRole->givePermissionTo('view apps');

        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin1234'),
        ]);
        $adminUser->assignRole('admin');

        $dosenUser = User::create([
            'name' => 'Dosen User',
            'email' => 'dosen@example.com',
            'password' => bcrypt('admin1234'),
        ]);
        $dosenUser->assignRole('dosen');

        $mahasiswaUser = Mahasiswa::create([
            'name' => 'Mahasiswa User',
            'email' => 'mahasiswa@example.com',
            'password' => bcrypt('admin1234'),
            'nim' => 23066012111
        ]);
        $mahasiswaUser->assignRole('mahasiswa');
    }
}
