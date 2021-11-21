<?php
$url='https://imdb-api.com/en/API/Title/k_kvsz7oj1/tt1375666';

class Film {
    public $id;
    public $Title;
    public $Year;
   
    public function toHtml(){
        echo "<tr>"
            ."<td>".$this->id."</td>"
            ."<td>".$this->Title."</td>"
            ."<td>".$this->Year."</td></tr>";
        
    }
    public static function GetFilm(){
        
        $respone=file_get_contents($url);
        $tab=json_decode($response,true);
        
        $this->id=tab["id"];
        $this->Title=tab["Title"];
        $this->Year=tab["Year"];
        return $tab;

    }

    public  function ReturnTable($movieCollection){
        $AllMovieCollection=[];
        foreach($movieCollection as $id=>$Film){
            $AllMovieCollection[]=static::GetFilm();
        }

              return $AllMovieCollection;
    }

    

}
il me reste l'affichage avec html

?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php $allFilms=Film::ReturnTable(file_get_contents($url)); ?>
</body>

</html>



 