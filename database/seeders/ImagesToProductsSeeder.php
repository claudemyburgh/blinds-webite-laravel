<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesToProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productImage = [
            [
                "id" => 1,
                "image_url" => base_path('images\1.jpg')
            ],
            [
                "id" => 2,
                "image_url" => base_path('images\2.jpg')
            ],
            [
                "id" => 3,
                "image_url" => base_path('images\3.jpg')
            ],
            [
                "id" => 4,
                "image_url" => base_path('images\4.jpg')
            ],
            [
                "id" => 5,
                "image_url" => base_path('images\5.jpg')
            ],
            [
                "id" => 6,
                "image_url" => base_path('images\6.jpg')
            ],
        ];


        foreach ($productImage as $product) {
            Product::find($product['id'])
                ->addMedia($product['image_url'])
                ->preservingOriginal()
                ->toMediaCollection();
        }

    }
}
