<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Functions\Helpers as Help;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = database_path('seeders/products.csv');
        
        $products = array_map('str_getcsv', file($csvFile));
        //dd($products);

        foreach ($products as $product) {
            DB::table('product')->insert([
                $path = __DIR__ . '/products.csv',
                $data = Help::getCsvData($path),
                //dd($data),
                foreach ($data as $index => $product) {
                    if ($index !== 0) {
                        $new_product = new Product();
                        $new_product->name = $product[1];
                        $new_product->image = $product[2];
                        $new_product->description = $product[3];
                        $new_product->price = $product[4];
                        $new_product->weight = $product[5];
                        $new_product->expiration_date = $product[6];
                        $new_product->country = $product[7];
                        $new_product->category = $product[8];
                        $new_product->quantity = $product[9];
                        $new_product->brand = $product[10];
                        $new_product->packaging = $product[11];
                        $new_product->ingredients = $product[12];
                        $new_product->type = $product[13];
                        $new_product->save();
                    }
                }
            ]);
        }
    }
}

