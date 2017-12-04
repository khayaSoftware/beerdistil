<?php

$beers;
$brewery_name;

function getBrewery(){
    $brewery = file_get_contents('https://api.brewerydb.com/v2/beer/'.$_GET['beer_id'].'/breweries?key=48a2a9fe3bea0a10998860f8da741958&format=json');
    return json_decode($brewery);
}



function getBeersByBrewery(){
    
    $beers_of_brewery = file_get_contents('https://api.brewerydb.com/v2/brewery/'.getBrewery()->data[0]->id.'/beers?key=48a2a9fe3bea0a10998860f8da741958&format=json');
    
    return json_decode($beers_of_brewery)->data;   
}

if(isset($_GET['beer_id'])){
    $beers = getBeersByBrewery();
    $brewery_name = getBrewery()->data[0]->name;
}
    
?>