<?php

use Illuminate\Database\Seeder;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'Product_type'=>'Food',
                'Product_name'=>'Noodles',
                'Product_stock'=>60,
                'Product_description'=>'Lucky Me Pancit Canton Hot and Spicy',
                'Price'=>12,
            ],
            [
                'Product_type'=>'Liqour',
                'Product_name'=>'Emperador',
                'Product_stock'=>48,
                'Product_description'=>'Emperador Light 750ml',
                'Price'=>120,
            ],
            [
                'Product_type'=>'Juice',
                'Product_name'=>'Del Monte',
                'Product_stock'=>24,
                'Product_description'=>'Del Monte Heart Smart 240ml',
                'Price'=>37,
            ],
            [
                'Product_type'=>'Junk Foods',
                'Product_name'=>'URC',
                'Product_stock'=>96,
                'Product_description'=>'Nova Country Cheddar 30g',
                'Price'=>32,
            ],
           
            ];
            foreach($products as $products){
                App\Products::create($products);
            }
    }
}
