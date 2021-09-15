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
        //

        Category::create([
            'name' => 'Desarrollo Web',
            'slug' => 'desarrollo-web'
        ]);

        Category::create([
            'name' => 'Diseño Web',
            'slug' => 'diseno-web'

        ]);

        Category::create([
            'name' => 'Programación',
            'slug' => 'programacion'

        ]);

    }
}
