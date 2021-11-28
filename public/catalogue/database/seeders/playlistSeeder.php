<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlayListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Etape 1

    //   for($i=0;$i<3;$i++){
    //          DB::table('playlist')->insert([
    //          'name' => Str::random(10)
              
    //         ]);

    //     }
       
        //Etape 2
        \App\Models\playList::factory(10)->create();
    }
}