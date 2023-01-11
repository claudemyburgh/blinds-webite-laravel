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
                "title" => "Sheer",
                "category_id" => 3,
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "social_description" => "Social description"
            ],
            [
                "title" => "Nairobi",
                "category_id" => 3,
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "social_description" => "Social description"
            ],
            [
                "title" => "Waving Leave",
                "category_id" => 3,
                "description" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "excerpt" => "Since this syntax is rather verbose",
                "body" => "Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.Since this syntax is rather verbose, Laravel provides additional, terser methods that use conventions to provide a better developer experience.",
                "social_description" => "Social description"
            ],
        ];


        foreach ($products as $product) {
            Product::create($product);
        }

    }
}
