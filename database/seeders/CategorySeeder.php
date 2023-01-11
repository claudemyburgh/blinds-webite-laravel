<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
          [
              "title" => "Indoor",
              "description" => "Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.",
              "parent_id" => null
          ],
          [
              "title" => "Outdoor",
              "description" => "Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.",
              "parent_id" => null
          ],
          [
              "title" => "Motion Blinds",
              "description" => "<p>MotionBlinds is a smart technology for window coverings that is available in a wide range of battery-powered and wired motors and controls for all types of window coverings, including residential, commercial and hospitality. The technology is designed to be simple and easy to connect, with straightforward assembly and installation for ultimate ease of use. The window coverings can be controlled in a variety of ways, including smartphones, smart speakers, remote controls, and even manually with a simple pull that automatically sets the blinds in motion.</p><p>One of the standout features of MotionBlinds is the Eve MotionBlinds series, which utilizes battery-powered motors with Apple HomeKit technology. This series was created in collaboration with Eve Systems, a leader in the smart home industry, known for developing accessories for the Apple HomeKit ecosystem.</p>",
              "parent_id" => 1
          ],
          [
              "title" => "Roller Blinds",
              "description" => "<p>Roller blinds are an all-time global favorite due to their versatility and functionality. They are the most popular shading product in the world, and their simple design makes them ideal for both residential and commercial use. Our extensive product line includes a wide range of options to meet every roller blind situation, from basic to exclusive, ready-made to made-to-measure, and everything in between. As a specialist in window coverings, our many years of experience are evident in our innovative, in-house designed and developed products. We stay up-to-date with global trends and data to provide our customers with the best roller blind assortment that meets their needs and preferences.</p>",
              "parent_id" => 1
          ],
          [
              "title" => "Venetian Blinds",
              "description" => "<p>Venetian blinds are the epitome of style and functionality. These timeless window coverings add a touch of luxury to any space and provide a wide range of options for controlling light and privacy. With the ability to mix and match slats, hardware and accessories in various colors, Venetian blinds can easily create a cohesive look in any room. Our collection of Venetian blinds is a comprehensive concept that offers solutions for all window covering situations, from basic to exclusive, residential to commercial, and everything in between. As a specialist in window coverings, we have a wealth of experience that is reflected in our innovative, in-house designed and developed products. Utilizing global trends and data, we provide you with all the elements you need to create the perfect Venetian blind assortment for your space.</p>",
              "parent_id" => 1
          ],
          [
              "title" => "Double Roller Blinds",
              "description" => "<p>The Double Roller Blind offers a unique blend of features, combining the versatility of a traditional roller blind with the added control of a venetian. This multi-functional system allows you to switch between day and night modes with ease, thanks to its combination of illuminating day and black-out fabrics. Whether you're looking for a pop of color or a more neutral tone, the collection offers a wide range of options to suit any interior. The blind also comes in both symmetrical and asymmetrical versions, with minimal light gaps for maximum privacy. It's an ideal solution for those looking to have control over both light and privacy in their home.</p>",
              "parent_id" => 1
          ],
          [
              "title" => "BamBoo Blinds",
              "description" => "<p>This collection of 50mm Venetian blinds made from Bamboo wood exudes natural elegance with its refined wood grain structure and lightweight material. It brings in a serene and peaceful atmosphere to any interior and provides an eco-friendly touch. </p><p> The Bamboo collection has a wide range of warm and timeless colors that are easy to match with any interior design, making it a great addition to any space. The balanced appearance and elegance of these Bamboo Venetian blinds makes it a versatile and sophisticated choice for any style of home.</p>",
              "parent_id" => 1
          ],
          [
              "title" => "Aluminium Blinds",
              "description" => "<p>Introducing our exclusive aluminium collection of 50mm Venetian blinds, designed to bring a touch of industrial sophistication to any space. Inspired by the sleek lines and bold hues of the automobile industry, these blinds boast a robust design and subtle gloss that exude power and glamour. The aluminum material is a perfect choice for creating an industrial-chic atmosphere in any room.
                </p><p>The collection features an appealing color palette that ranges from light, warm, and neutral shades to mysterious, powerful, and modern hues, providing a wide range of options to match any interior design style. Whether you're looking to add a touch of elegance to your living room or create a bold statement in your office space, these venetian blinds are sure to elevate any room in your home or commercial spaces with their modern and sophisticated look. With the durability of aluminium, you'll be able to enjoy your new blinds for years to come.</p>",
              "parent_id" => 1
          ],
          [
              "title" => "Zebra Blinds",
              "description" => "<p>The Zebra blinds collection is the perfect way to add a touch of elegance and intimacy to any room. With the combination of transparent and opaque stripes in the fabric, you can easily control the amount of light that enters the room and create the ideal ambiance. Whether you're looking for a more open and airy feel or a more intimate and cozy atmosphere, the Zebra blinds make it easy to achieve the perfect balance of light and privacy. This collection offers a wide variety of fabric options, including plain, jacquards, and nature fabrics, in both transparent and black-out qualities, providing endless possibilities for decorating your space. The collection features a range of colors and styles, from light, natural shades to warm, cheerful tones, ensuring there is something to suit every interior, whether it is modern or has a rustic feel. With this collection of Zebra blinds, you can effortlessly create a unique and stylish look in any room of your home.</p> ",
              "parent_id" => 1
          ],
          [
              "title" => "Basswood Blinds",
              "description" => "<p>The Basswood series of blinds are made of a thicker, heavier wooden material and are available in a wide range of lacquered wood colors, providing a more robust and sturdy look. The natural beauty of wood brings warmth and coziness to any room, while also making windows the focal point. However, due to the natural characteristics of wood, variations in color, grain texture, and warping may occur depending on the environment. It is important to be cautious when using wood venetians in humid or wet areas, as they may warp. When close to the sea, it is advisable to keep the blinds in a pulled-up position when windows are fully opened to prevent salt build-up and prolong their lifespan. Cleaning should be done using a clean, dry feather duster, soft cloth, or dust mitt to gently wipe off dust and debris, and for significant residue build-up a mild detergent can be used. These blinds are supplied with ladder string and cords which are color-coordinated and a wood valance that finishes off the product beautifully.</p><p>Wood venetians are not light-blackout products, they will allow some light into the room while ensuring privacy. They are available in 50mm width as it is more stable than narrower widths. They are also heavier than other products and it's recommended to not order sizes that would be too heavy to pull up. Basswood is a stable wood and suitable for venetian blinds but still a natural product. Slats should be tilted to the open position before pulling the blinds up. Be aware that dye lot differences are probable, therefore, it's recommended to order all blinds needed for a room at once, and to indicate if the blinds will be in one opening. Over time, some fading may occur, especially on darker colors.</p>",
              "parent_id" => 1
          ],
          [
              "title" => "Honeycomb Blinds",
              "description" => "<p>The honeycomb blinds collection is an energy-efficient solution that helps to save energy while maintaining a stylish look. Their unique honeycomb structure provides insulation and heat reflection properties that contribute to energy conservation. With their distinctive horizontal lines and cell structure, honeycomb blinds create a modern and contemporary aesthetic.</p><p>This collection offers a wide range of functional features that make them an ideal choice for both residential and commercial spaces. From fabric choices to systems and automation concepts like MOTION, our smart and motorized blinds, this collection has a solution for every window covering situation. The collection ranges from basic to exclusive, ready-made to custom-made, and commercial to projects, so whether you're looking for window coverings for a single room or for a large-scale project, you'll find what you need in this collection.</p>",
              "parent_id" => 1
          ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

    }
}
