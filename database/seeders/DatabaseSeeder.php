<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use App\Models\Kelas;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Prodi;
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
        Permission::create(['name' => 'view apps']);

        $adminRole = Role::create(['name' => 'admin']);
        $dosenRole = Role::create(['name' => 'dosen']);
        $mahasiswaRole = Role::create(['name' => 'mahasiswa']);

        $adminRole->givePermissionTo('view dashboard');
        $adminRole->givePermissionTo('view configuration');
        $adminRole->givePermissionTo('view master data');

        $dosenRole->givePermissionTo('view dashboard');
        $dosenRole->givePermissionTo('view akademik');

        $mahasiswaRole->givePermissionTo('view apps');

        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1234'),
        ]);
        $adminUser->assignRole('admin');

        $dosenUser = User::create([
            'name' => 'Dosen User',
            'email' => 'dosen@gmail.com',
            'password' => bcrypt('admin1234'),
        ]);
        $dosenUser->assignRole('dosen');

        $mahasiswaUser = User::create([
            'name' => 'Mahasiswa User',
            'password' => bcrypt('admin1234')

        ]);
        $mahasiswaUser->assignRole('mahasiswa');

        Fakultas::create([
            'nama' => 'Fakultas Teknik Informasi',
            'singkat' => 'FTI'
        ]);

        Prodi::create([
            'nama' => 'Informatika',
            'singkat' => 'IF'
        ]);

        Kelas::create([
            'nama' => 'IF III A',
            'fakultas_id' => '1',
            'prodi_id' => '1',
            'tingkat' => '1',
        ]);

        Mahasiswa::create([
            'user_id' => $mahasiswaUser->id,
            'nim' => '32066012111',
            'tmp_lahir' => 'Majalengka',
            'tgl_lahir' => '2004/10/05',
            'fakultas_id' => '1',
            'prodi_id' => '1',
            'kelas_id' => '1',
        ]);
    }
}
