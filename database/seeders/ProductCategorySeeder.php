<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artisanCategories = array(
            "Paintings" => array("Beautiful Landscape Painting","Abstract Artwork","Portrait of a Woman","Modern Art Masterpiece"),
            "Handcrafted Jewelry" => array("Silver Bracelet with Gemstones","Elegant Pearl Necklace","Hand-Stamped Copper Earrings","Customized Name Necklace"),
            "Woodworking Creations" => array("Hand-carved Wooden Bowl","Unique Wooden Furniture","Artistic Wood Sculpture"),
            "Handmade Textiles" => array("Colorful Handwoven Scarf","Embroidered Pillow Covers","Quilted Wall Hangings"),
            "Ceramic Art" => array("Porcelain Tea Set","Handcrafted Pottery Vase","Ceramic Sculptures"),
            "Metalwork" => array("Forged Iron Candleholders","Custom Metal Signage","Bronze Sculptures"),
            "Glass Art" => array("Stained Glass Window Panels","Blown Glass Vases","Fused Glass Artwork"),
        );

        foreach ($artisanCategories as $categoryName => $products) {
            $categoryName = \App\Models\ProductCategory::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            foreach ($products as $product) {
                \App\Models\Product::create([
                    'name' => $product,
                    'slug' => \Illuminate\Support\Str::slug($product),
                    'parent_id' => $categoryName->id,
                ]);
            }
        }
    }
}
