<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'id'         => 1,
                'name'       => 'ubrukopi',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'    => 2,
                'name' => 'g coffee roastery',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'    => 3,
                'name' => 'anomali coffee',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'    => 4,
                'name' => 'titik temu roastery',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'    => 5,
                'name' => 'reirom coffee solution',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'id'    => 6,
                'name' => 'irenk beans',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        Category::insert($category);
    }
}
