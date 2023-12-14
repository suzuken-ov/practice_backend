<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('product')->insert([
            'id' => 1,
            'name' => 'YUJI',
            'price' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
