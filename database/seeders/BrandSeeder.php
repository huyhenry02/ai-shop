<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = file_get_contents(database_path('seeders/json/brand.json'));
        $data = json_decode($json);

        foreach ($data as $item) {
            Brand::create([
                'name' => $item->name,
                'description' => $item->description,
            ]);
        }
    }
}
