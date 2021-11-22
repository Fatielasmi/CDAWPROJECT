<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Etape 1
       /* DB::table('films_table')->insert([
             'name' => Str::random(10)
            ]);
        DB::table('films_table')->insert([
                'categorie' => Str::random(10)
               ]);

        DB::table('films_table')->insert([
                'director' => Str::random(10)
               ]);
        DB::table('films_table')->insert([
                'path' => Str::random(10)
               ]);*/

        //Etape 2
       \App\Models\film::factory(10)->create();
    }
}