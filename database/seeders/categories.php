<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class categories extends Seeder
{
    public function run(): void
    {
        DB::table("categories")->insert([
        'name'=>'Blusa',
        'status'=> true,
        ]);
    }
}
