<?php

namespace Database\Seeders;

use App\Models\Product;
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
        Product::create(
            [
                'name' => 'Product A',
                'category' => '{ "id": 1, "name": "Electronics", "photo": null}',
                'price' => 3,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
            ]
        );

        Product::create(
            [
                'name' => 'Product B',
                'category' => '{ "id": 1, "name": "Electronics", "photo": null}',
                'price' => 4,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
            ]
        );

        Product::create(
            [
                'name' => 'Product C',
                'category' => '{ "id": 1, "name": "Electronics", "photo": null}',
                'price' => 5,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
            ]
        );
    }
}
