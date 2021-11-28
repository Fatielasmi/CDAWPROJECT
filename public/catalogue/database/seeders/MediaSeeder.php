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
      $resp1=file_get_contents('https://imdb-api.com/en/API/Top250Movies/k_z3f63609');

$rp = json_decode($resp1);




 for($i = 0; $i <=10; $i++){

   $id=$rp->{'items'}[$i]->{'id'};
   $year=$rp->{'items'}[$i]->{'year'};
   $title=$rp->{'items'}[$i]->{'title'};
   $image=$rp->{'items'}[$i]->{'image'};
   

    $res=file_get_contents('https://imdb-api.com/en/API/Title/k_z3f63609/'.$id);
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
}



    }


   
   // DB::table('media')->insert([
//     "type"=>$type,
//     "title"=>$title,
//     "description"=>$description,
//     "year"=>$year,
//     "image"=>$image
//    ]);
   }    

?>