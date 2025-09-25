<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@admin.com'], // criterio de búsqueda
            [
                'name' => 'Mauricio',
                'password' => Hash::make('admin'),
                'activo' => true,
                'rol' => 'admin',
            ]
        );
    }
}
