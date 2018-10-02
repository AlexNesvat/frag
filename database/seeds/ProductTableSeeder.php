<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,50) as $product){
            DB::table('products')->insert([
                'name' => $faker->name,
                'sku' => $faker->slug,
                'description' => $faker->paragraph,
                'price' => random_int( 25,35),
                'active' => true,
                'subscribe' => true,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                //$dateTime
            ]);
        }

        foreach (range(1,10) as $product){
            DB::table('attributes')->insert([
                'attribute_name' => $faker->name,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

        foreach (range(1,30) as $product){
            DB::table('attribute_values')->insert([
                'attribute_id' => random_int(1,10),
                'value' => $faker->word,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

        foreach (range(1,30) as $product){
            DB::table('product_attribute')->insert([
                'product_id' => random_int(1,50),
                'attribute_id' => random_int(1,10),
                'value_id' => random_int(1,30),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('attributes');
        Schema::dropIfExists('attribute_values');
        Schema::dropIfExists('product_attribute');
    }
}
