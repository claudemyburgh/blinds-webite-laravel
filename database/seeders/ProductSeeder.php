<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $products = [
            [
                "title" => "Nairobi",
                "category_id" => 9,
                "product_range" => "Sheer",
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience."
            ],
            [
                "title" => "Waving Leave",
                "category_id" => 9,
                "product_range" => "Sheer",
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience."
            ],
            [
                "title" => "Essential 3000 10%",
                "category_id" => 9,
                "product_range" => "Light Filtering",
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience."
            ],
            [
                "title" => "Essential 4000 5%",
                "category_id" => 9,
                "product_range" => "Light Filtering",
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience."
            ],
            [
                "title" => "Mombassa",
                "category_id" => 9,
                "product_range" => "Light Filtering",
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience."
            ],
            [
                "title" => "Proto",
                "category_id" => 9,
                "product_range" => "Light Filtering",
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience."
            ],
            [
                "title" => "Berlin",
                "category_id" => 9,
                "product_range" => "Block-out",
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience."
            ],
            [
                "title" => "Mombassa",
                "category_id" => 9,
                "product_range" => "Block-out",
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience."
            ],
            [
                "title" => "Yamar",
                "category_id" => 9,
                "product_range" => "Block-out",
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience."
            ],
            [
                "title" => "Satin Flower",
                "category_id" => 9,
                "product_range" => "Block-out",
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience."
            ],
        ];


        foreach ($products as $product) {
            Product::create($product);
        }

    }
}
