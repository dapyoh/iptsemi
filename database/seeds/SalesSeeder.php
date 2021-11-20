<?php

use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sales = [
            [
                'ProductId'=>1,
                'Total_sales'=>850,
            ],
            [
                'ProductId'=>2,
                'Total_sales'=>600,
            ],
            [
                'ProductId'=>3,
                'Total_sales'=>550,
            ],
            [
                'ProductId'=>4,
                'Total_sales'=>110,
            ],
            ];
            foreach($sales as $sales){
                App\Sales::create($sales);
            }
    }
}
