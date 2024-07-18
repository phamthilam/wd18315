<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('products')->insert([
        //     'name'=>'abc',
        //     'price'=>'60.5',
        //     'image'=>'http://anc.com',
        //     'created_at'=>Carbon::now(),
        //     'updated_at'=>Carbon::now()
        // ]);
        Product::factory()->count(15)->create();
    }
}
