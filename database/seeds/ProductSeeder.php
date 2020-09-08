<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Product();
        $product->name = 'Iphone';
        $product->price = '100';
        $product->color = 'Red';
        $product->desc = 'New Product';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Samsung';
        $product->price = '200';
        $product->color = 'Blue';
        $product->desc = 'New Product';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Oppo';
        $product->price = '105';
        $product->color = 'Green';
        $product->desc = 'Secondhand';
        $product->save();

        $product = new \App\Product();
        $product->name = 'V Smart';
        $product->price = '80';
        $product->color = 'Red';
        $product->desc = 'New Product';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Xiaomi';
        $product->price = '200';
        $product->color = 'White';
        $product->desc = 'Secondhand';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Nokia';
        $product->price = '140';
        $product->color = 'Brown';
        $product->desc = 'New Product';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Iphone X';
        $product->price = '500';
        $product->color = 'Pink';
        $product->desc = 'New Product';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Samsung Galaxy';
        $product->price = '190';
        $product->color = 'White';
        $product->desc = 'Secondhand';
        $product->save();

    }
}
