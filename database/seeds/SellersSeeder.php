<?php

use Illuminate\Database\Seeder;

class SellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sellers = [
            [
                'Name'=>'John Lowie',
                'Email'=>'louietabiliran@gmail.com',
                'Product_type'=>'Beer',
                'Total_sales'=>850,

            ],
            [
                'Name'=>'Ron',
                'Email'=>'Ron@gmail.com',
                'Product_type'=>'Hard Drinks',
                'Total_sales'=>600,

            ],
            [
                'Name'=>'Brenie',
                'Email'=>'Bren@gmail.com',
                'Product_type'=>'Tuba',
                'Total_sales'=>550,

            ],
            [
                'Name'=>'Reymark',
                'Email'=>'Rey@gmail.com',
                'Product_type'=>'Junk food',
                'Total_sales'=>110,

            ],
            ];
            foreach($sellers as $sellers){
                \App\Sellers::create($sellers);
            }
    }
}
