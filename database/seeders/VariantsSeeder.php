<?php

namespace Database\Seeders;

use App\Models\Variant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $variants = [
          [
              "product_id" => 1,
              "sku" => "asc",
              "cleaning" => "Damp cloth",
              "color" => "peal",
              "material" => "plastic",
              "pattern" => "flowers",
              "thickness" => "0.5mm",
              "pattern_width" => "300mm",
              "pattern_height" => "320mm",
              "flame_retardant" => false,
              "printable" => true,
              "popular" => true,
          ]
        ];

        foreach ($variants as $variant) {
            Variant::create($variant);
        }

    }
}
