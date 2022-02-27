
<?php
        $contFotos = 0;
        $columna = 1;
        $query = $_GET['query'];
        $page = $_GET['page'];
        require_once('apiKey.php');
        $link =  "https://api.pexels.com/v1/search?query=".$query."&page=".$page; 

        $headers = array(
            'Authorization: ' . $key
        );

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $img = json_decode($response, true);

        
        
        foreach ($img['photos'] as $element) {
            $myImg = $element['src']['large'];

            //echo "<script>console.log($columna)</script>";
            //echo "<script>console.log($contFoto)</script>";
            echo "<img class='clickable' src='".$myImg."' value='".$element['id']."' onclick='location.href=`foto.php?id=".$element['id']."`'>";  

            /*if($contFotos <= 5){

                echo "<div class='col$columna'>
                    '<img src='$myImg'>'
                </div>";

            }else{

                $contFotos = 0;
                ++$columna;

                echo "<div class='col$columna'>
                    <img src='$myImg'>
                </div>";

            }*/

        }
    

