<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Etape 1
   $categories=[      ['id' => 1, 'name' => 'Comedy'],
        ['id' => 2, 'name' => 'Horror'],
        ['id' => 3, 'name' => 'Romance'],
        ['id' => 4, 'name' => 'Action'],
      
        ['id' => 5, 'name' => 'Drama'],
        ['id' => 6, 'name' => 'Anime']];
        DB::table('categories')->insert($categories);
          
        
         

        //Etape 2
       // \App\Models\Category::factory(10)->create();
    }
}
