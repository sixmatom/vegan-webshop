<?php

namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Str;

class TomProductsSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i = 1; $i <= 10; $i++){
        DB::table('tomproducts')->insert([
           'name' => Str::random(10),
           'color' => Str::random(10),
       

       ]);
       }
    }
}