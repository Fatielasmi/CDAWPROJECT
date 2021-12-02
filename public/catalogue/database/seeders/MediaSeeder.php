<?php 
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class MediaSeeder extends Seeder{
  /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $resp1=file_get_contents('https://imdb-api.com/en/API/Top250Movies/k_kvsz7oj1');

$rp = json_decode($resp1);




 for($i = 0; $i <=30; $i++){

   $id=$rp->{'items'}[$i]->{'id'};
   $year=$rp->{'items'}[$i]->{'year'};
   $title=$rp->{'items'}[$i]->{'title'};
   $image=$rp->{'items'}[$i]->{'image'};
   

    $res=file_get_contents('https://imdb-api.com/en/API/Title/k_kvsz7oj1/'.$id);
    $resp = json_decode($res);
   
    print_r($resp->id);
    $description=$resp->plot;
    $type=$resp->type;

  DB::table('media')->insert([
    "type"=>$type,
    "title"=>$title,
    "description"=>$description,
    "year"=>$year,
    "image"=>$image
   ]);
//    $medias=[
//      ['category_id'=>'2','type' => 'movie', 'title' => 'End game', 'description'=>'The grave course of events set in motion by Thanos, that wiped out half the universe and fractured the Avengers ranks, compels the remaining Avengers to take one final stand in Marvel Studios grand conclusion','year'=>'2010','image'=>'https://upload.wikimedia.org/wikipedia/en/thumb/5/5c/Endgame-movie-cover.jpg/220px-Endgame-movie-cover.jpge'],
//    ['category_id'=>'2','type' => 'movie', 'title' => 'Sorority Wars', 'description'=>'A college freshman (Lucy Hale) makes enemies when she refuses to pledge her mother s (Courtney Thorne-Smith) sorority','year'=>'2011','image'=>'https://en.notrecinema.com/images/cache/sorority-wars-affiche_489038_3730.jpg'],
//    ['category_id'=>'4','type' => 'movie', 'title' => 'Twilight New Moon', 'description'=>'Plot. On her eighteenth birthday, Bella Swan awakens from a dream where she is an old woman and Edward Cullen, her immortal vampire boyfriend, is forever young','year'=>'2008','image'=>'https://flxt.tmsimg.com/assets/p3505527_p_v10_ar.jpg'],
//    ['category_id'=>'4','type' => 'movie', 'title' => 'Avatar', 'description'=>'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home. When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora.','year'=>'2009','image'=>'https://m.media-amazon.com/images/I/41zWyLXIetL._AC_.jpg'],
//    ['category_id'=>'2','type' => 'movie', 'title' => 'Black Swan', 'description'=>'A committed dancer struggles to maintain her sanity after winning the lead role in a production of Tchaikovsky s Swan Lake. Nina (Portman) is a ballerina in a New York City ballet company whose life, like all those in her profession, is completely consumed with dance.','year'=>'2008','image'=>'data:image/jpeg;base64,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'],
//    ['category_id'=>'2','type' => 'movie', 'title' => 'Beauty and the beast', 'description'=>' ','year'=>'2008','image'=>''],
//    ['category_id'=>'2','type' => 'movie', 'title' => 'Eclipse', 'description'=>'','year'=>'2008','image'=>''],
//    ['category_id'=>'2','type' => 'movie', 'title' => 'Coraline', 'description'=>'','year'=>'2008','image'=>''],
//    ['category_id'=>'2','type' => 'movie', 'title' => 'Unstoppable', 'description'=>'','year'=>'2008','image'=>''],
//    ['category_id'=>'2','type' => 'movie', 'title' => 'Priest 3D', 'description'=>'','year'=>'2008','image'=>''],
//    ];
      
//         DB::table('media')->insert($medias);

// }



    }


   
   // DB::table('media')->insert([
//     "type"=>$type,
//     "title"=>$title,
//     "description"=>$description,
//     "year"=>$year,
//     "image"=>$image
//    ]);
   } 
  }   

?>