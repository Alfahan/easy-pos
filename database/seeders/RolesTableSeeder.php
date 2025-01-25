<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Menjalankan seeder untuk roles.
     *
     * @return void
     */
    public function run(): void
    {
        // Membuat role admin
        Role::firstOrCreate(['name' => 'admin']);
    }
}
