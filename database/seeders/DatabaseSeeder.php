<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\categories;
use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("categories")->insert(
            [
                [
                    'name'=>'Pantalón',
                    'status'=> true,
                ],
                [
                    'name'=>'Blusa',
                    'status'=> true,
                ],
                [
                    'name'=>'Zapato',
                    'status'=> true,
                ],
                [
                    'name'=>'Bisuteria',
                    'status'=> true,
                ],
                [
                    'name'=>'Lenceria',
                    'status'=> true,
                ],
                [
                    'name'=>'Carteras',
                    'status'=> true,
                ],
            ]
    );
    }
}
