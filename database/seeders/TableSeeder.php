<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tables')->insert(
            [
                [
                    'id' => 1,
                ],
                [
                    'id' => 2,
                ],
                [
                    'id' => 3,
                ],
                [
                    'id' => 4,
                ],
                [
                    'id' => 5,
                ],
                [
                    'id' => 6,
                ],
                [
                    'id' => 7,
                ],
                [
                    'id' => 8,
                ],
                [
                    'id' => 9,
                ],
                [
                    'id' => 10,
                ],
                [
                    'id' => 11,
                ],
                [
                    'id' => 12,
                ],
                [
                    'id' => 13,
                ],
                [
                    'id' => 14,
                ],
                [
                    'id' => 15,
                ],


            ]
        );
    }
}
