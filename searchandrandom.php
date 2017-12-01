<?php

error_reporting(0);

$randomBeer;
$beer_id;
$searchResults;
$searchType;

function getRandomBeer(){

    $json = file_get_contents('https://api.brewerydb.com/v2/beer/random?key=48a2a9fe3bea0a10998860f8da741958&format=json');
    return json_decode($json);

}

function checkRandomBeer(){
    $beer;
    do{
        $beer = getRandomBeer();
    }while(is_null($beer->data->labels->medium) && is_null($beer->data->labels->description));
    return $beer;
}

if(isset($_GET['random'])){
    $randomBeer = checkRandomBeer();
    $beer_id = checkRandomBeer()->data->id;   
}

function search(){
    if(isValid($_POST["search"])){
        $json = file_get_contents('https://api.brewerydb.com/v2/search?q='.$_POST["search"].'&type='.$_POST["optrad"].'&key=48a2a9fe3bea0a10998860f8da741958&format=json');
        return json_decode($json);
    }else{
        return null; 
    }
    
}

function isValid($text){
    if (preg_match("/^[A-Za-z0-9- ]+$/", $text)) {
        return true;
    }
    else if(is_null($text)){
        return true;
    } 
    else {
        return false;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $searchResults = search();
    $randomBeer = checkRandomBeer();
    $beer_id = checkRandomBeer()->data->id;   
}

?>