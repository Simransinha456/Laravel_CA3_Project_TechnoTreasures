<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            
            [
                'name' => 'Hp laptop',
                'price' => '50,999',
                'description' => 'HP Laptop 15s, 11th Gen Intel Core i5-1155G7, 15.6-inch (39.6 cm), FHD, 16GB DDR4, 512GB SSD, Intel Iris Xe Graphics, Backlit KB, Thin & Light (Win 11,...',
                'category' => 'Watch',
                'gallery' => 'https://m.media-amazon.com/images/I/71fXlFIFMWL._SL1500_.jpg',
            ],
        ]);
    }
}
