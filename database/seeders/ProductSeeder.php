<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = file_get_contents(database_path('seeders/json/product.json'));
        $data = json_decode($json);

        foreach ($data as $item) {
            Product::create([
                'name' => $item->name,
                'description' => $item->description,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'sale' => $item->sale,
                'color' => $item->color,
                'size' => $item->size,
                'category_id' => $item->category_id,
                'brand_id' => $item->brand_id,
                'image' => $item->image,
                'width' => $item->width,
                'height' => $item->height,
                'weight' => $item->weight,
            ]);
        }
    }
}
