<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'João', 'email' => 'joao@email.com', 'password' => Hash::make('usuario123'),
                ],
                [
                    'name' => 'Arthur', 'email' => 'arthur@email.com', 'password' => Hash::make('usuario123')
                ],
                [
                    'name' => 'Maria', 'email' => 'maria@email.com', 'password' => Hash::make('usuario123')
                ]
            ]
        );
    }
}
