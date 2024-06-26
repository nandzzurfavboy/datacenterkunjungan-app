<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'nip' => '234182301302',
            'gender' => 0,
            'jabatan' => 'Kepala Dinas',
            'role' => 'superadmin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'nip' => '2341823023666',
            'gender' => 1,
            'jabatan' => 'Kepala Dinas',
            'role' => 'admin',
        ]);

        $this->call(DinasSeeder::class);
    }
}
