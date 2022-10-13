<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = \App\Models\Product::create([
            "user_id"=>1,
            "category_id"=>1,
            "article"=>"02452153",
            "name"=>"Xiaomi",
            "description"=>"mobile phone",
            "price"=>124,
        ]);
        \App\Models\ProductPhotos::create([
            "product_id"=>$product->id,
            "photo"=>"/storage/testphoto.jpg",
        ]);
    }
}

//for ($i = 1; $i <= 8; $i++) {
//    Product::updateOrCreate(
//        [
//            'product_slug' => "test-{$category->id}-{$i}",
//        ],
//        [
//            'product_title' => "Тестовый товар в категории {$category->category_name} {$i}",
//            'product_slug' => "test-{$category->id}-{$i}",
//            'product_id_category' => $category->id,
//            'product_description' => 'test',
//            'product_price' => 100,
//            'product_is_moderate' => 1
//        ]
//    );
//}
