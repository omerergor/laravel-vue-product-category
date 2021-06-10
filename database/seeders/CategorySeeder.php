<?php

namespace Database\Seeders;

use App\Models\Category;
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
        Category::create(
            [
                'name' => 'Electronics',
                'photo' => null
            ]
        );
        Category::create(
            [
                'name' => 'Smartphone',
                'photo' => 'https://example.test/img/gdfg54g.jpg'
            ]
        );
        Category::create(
            [
                'name' => 'LCD',
                'photo' => null
            ]
        );
    }
}
