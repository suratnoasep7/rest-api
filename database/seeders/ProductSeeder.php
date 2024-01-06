<?php

namespace Database\Seeders;

use App\Models\Product;
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
        
        $product = [
            [
                'id'                     => 1,
                'category_id'            => 1,
                'product_name'           => 'abid clever dripper 102',
                'short_description'      => 'tes',
                'long_description'       => '<p>tes</p>',
                'product_price'          => 480000,
                'product_quantity'       => 10,
                'rating'                 => 4,
                'total_rating'           => 7,
                'product_image'          => '1653382012.jpg',
                'created_at'             => date('Y-m-d H:i:s')
            ],
            [
                'id'                     => 2,
                'category_id'            => 1,
                'product_name'           => 'abid clever dripper 102',
                'short_description'      => 'tes',
                'long_description'       => '<p>tes</p>',
                'product_price'          => 480000,
                'product_quantity'       => 10,
                'rating'                 => 4,
                'total_rating'           => 7,
                'product_image'          => '1653382012.jpg',
                'created_at'             => date('Y-m-d H:i:s')
            ],
            [
                'id'                     => 3,
                'category_id'            => 1,
                'product_name'           => 'abid clever dripper 102',
                'short_description'      => 'tes',
                'long_description'       => '<p>tes</p>',
                'product_price'          => 480000,
                'product_quantity'       => 10,
                'rating'                 => 4,
                'total_rating'           => 7,
                'product_image'          => '1653382012.jpg',
                'created_at'             => date('Y-m-d H:i:s')
            ],
            [
                'id'                     => 4,
                'category_id'            => 2,
                'product_name'           => 'almond biscuit',
                'short_description'      => 'tes',
                'long_description'       => '<p>tes</p>',
                'product_price'          => 250000,
                'product_quantity'       => 10,
                'rating'                 => 4,
                'total_rating'           => 7,
                'product_image'          => '1653382012.jpg',
                'created_at'             => date('Y-m-d H:i:s')
            ],
            [
                'id'                     => 5,
                'category_id'            => 3,
                'product_name'           => 'aceh gayo coffee beans',
                'short_description'      => 'tes',
                'long_description'       => '<p>tes</p>',
                'product_price'          => 90000,
                'product_quantity'       => 10,
                'rating'                 => 4,
                'total_rating'           => 7,
                'product_image'          => '1653382012.jpg',
                'created_at'             => date('Y-m-d H:i:s')
            ],
            [
                'id'                     => 6,
                'category_id'            => 3,
                'product_name'           => 'blackpearl coffee beans',
                'short_description'      => 'tes',
                'long_description'       => '<p>tes</p>',
                'product_price'          => 90000,
                'product_quantity'       => 10,
                'rating'                 => 4,
                'total_rating'           => 7,
                'product_image'          => '1653382012.jpg',
                'created_at'             => date('Y-m-d H:i:s')
            ],
            [
                'id'                     => 7,
                'category_id'            => 4,
                'product_name'           => 'bokasso #3',
                'short_description'      => 'tes',
                'long_description'       => '<p>tes</p>',
                'product_price'          => 160000,
                'product_quantity'       => 10,
                'rating'                 => 4,
                'total_rating'           => 7,
                'product_image'          => '1653382012.jpg',
                'created_at'             => date('Y-m-d H:i:s')
            ],
            [
                'id'                     => 8,
                'category_id'            => 5,
                'product_name'           => 'ciwidey west java',
                'short_description'      => 'tes',
                'long_description'       => '<p>tes</p>',
                'product_price'          => 104500,
                'product_quantity'       => 10,
                'rating'                 => 4,
                'total_rating'           => 7,
                'product_image'          => '1653382012.jpg',
                'created_at'             => date('Y-m-d H:i:s')
            ],
            [
                'id'                     => 9,
                'category_id'            => 2,
                'product_name'           => 'espresso blend',
                'short_description'      => 'tes',
                'long_description'       => '<p>tes</p>',
                'product_price'          => 185000,
                'product_quantity'       => 10,
                'rating'                 => 4,
                'total_rating'           => 7,
                'product_image'          => '1653382012.jpg',
                'created_at'             => date('Y-m-d H:i:s')
            ],
            [
                'id'                     => 10,
                'category_id'            => 6,
                'product_name'           => 'ethiopia guji washed',
                'short_description'      => 'tes',
                'long_description'       => '<p>tes</p>',
                'product_price'          => 150000,
                'product_quantity'       => 10,
                'rating'                 => 4,
                'total_rating'           => 7,
                'product_image'          => '1653382012.jpg',
                'created_at'             => date('Y-m-d H:i:s')
            ],
        ];

        Product::insert($product);
    }
}
