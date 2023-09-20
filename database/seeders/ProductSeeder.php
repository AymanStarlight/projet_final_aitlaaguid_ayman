<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Fillmore Mid-Century Chair',
                'price' => 899,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 1,
                'img_url' => 'product_1.jpg',
                'stock' => 4,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jodie Wing Chair',
                'price' => 749,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 1,
                'img_url' => 'product_2.jpg',
                'stock' => 8,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Benson Leather Chair',
                'price' => 1399,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 1,
                'img_url' => 'product_3.jpg',
                'stock' => 6,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Isabella Chair',
                'price' => 646,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 1,
                'img_url' => 'product_4.jpg',
                'stock' => 12,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Whitman Vegan Leather Chair',
                'price' => 699,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 1,
                'img_url' => 'product_5.jpg',
                'stock' => 10,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kristoff Swivel Chair',
                'price' => 1000,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 1,
                'img_url' => 'product_6.jpg',
                'stock' => 3,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Avalon Channeled Chair',
                'price' => 750,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 1,
                'img_url' => 'product_7.jpg',
                'stock' => 2,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Cozy Swivel Chair',
                'price' => 1326,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 1,
                'img_url' => 'product_8.jpg',
                'stock' => 8,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Harmony Sofa',
                'price' => 1700,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 2,
                'img_url' => 'product_9.jpg',
                'stock' => 4,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Newport Modular Sofa',
                'price' => 2000,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 2,
                'img_url' => 'product_10.jpg',
                'stock' => 3,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Leo Motion Reclining Sofa',
                'price' => 2500,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 2,
                'img_url' => 'product_11.jpg',
                'stock' => 5,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Haven Leather Sofa',
                'price' => 3000,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 2,
                'img_url' => 'product_12.jpg',
                'stock' => 2,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dalton Motion Reclining Leather Sofa',
                'price' => 6000,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 2,
                'img_url' => 'product_13.jpg',
                'stock' => 1,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Zander Leather Sofa',
                'price' => 1500,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 2,
                'img_url' => 'product_14.jpg',
                'stock' => 7,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Andes Sofa',
                'price' => 1100,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 2,
                'img_url' => 'product_15.jpg',
                'stock' => 8,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mella Sofa',
                'price' => 800,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 2,
                'img_url' => 'product_16.jpg',
                'stock' => 7,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Aria Coffee Table',
                'price' => 500,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 3,
                'img_url' => 'product_17.jpg',
                'stock' => 7,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Travertine Coffee Table',
                'price' => 1333,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 3,
                'img_url' => 'product_18.jpg',
                'stock' => 9,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Spoke Nesting Coffee Tables',
                'price' => 400,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 3,
                'img_url' => 'product_19.jpg',
                'stock' => 15,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Anton Marble Coffee Table',
                'price' => 999,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 3,
                'img_url' => 'product_20.jpg',
                'stock' => 7,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Volume Round Drum Coffee Table - Wood',
                'price' => 599,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 3,
                'img_url' => 'product_21.jpg',
                'stock' => 11,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Industrial Storage Pop-Up Coffee Table',
                'price' => 350,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 3,
                'img_url' => 'product_22.jpg',
                'stock' => 3,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Monti Lava Stone Coffee Table',
                'price' => 800,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 3,
                'img_url' => 'product_23.jpg',
                'stock' => 5,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hazel Pencil Reed Coffee Table',
                'price' => 899,
                'description' => "First replenish living. Creepeth image image. Creeping can't, won't called. Two fruitful let days signs sea together all land fly subdue",
                'category_id' => 3,
                'img_url' => 'product_24.jpg',
                'stock' => 4,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
