<?php
//appeler l'api par php 
/*
function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));

    }
    $result = curl_exec($curl);

    curl_close($curl);

    return $result;}*/

 $response = file_get_contents("https://imdb-api.com/en/API/Title/k_3rh7vw00/tt1375666");
 $response = json_decode($response,true);

 foreach($response as $row){
    print_r($row); 
  }

  foreach($response as $row){
    print_r($row["id"]); 
  }




    ?>