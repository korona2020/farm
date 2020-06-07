<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
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
            'name'=>'Fruta & Perime',
            'slug'=>Str::slug('Fruta & Perime')
        ]);
        Category::create([
            'name'=>'Recel & Gliko',
            'slug'=>Str::slug('Recel & Gliko')

        ]);
        Category::create([
            'name'=>'Mish',
            'slug'=>Str::slug('Mish')
        ]);
        Category::create([
            'name'=>'Bulmet',
            'slug'=>Str::slug('Bulmet')
        ]);
        Category::create([
            'name'=>'Mjalte',
            'slug'=>Str::slug('Mjalte')
        ]);
    }
}
