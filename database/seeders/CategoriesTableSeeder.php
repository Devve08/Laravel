<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'cat_name' => Str::random(5)
        ], [
            'cat_name' => Str::random(5)
        ], [
            'cat_name' => Str::random(5)
        ]]);
    }
}
