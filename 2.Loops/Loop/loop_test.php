<?php

// for($i=0;$i<5;$i++){
//     echo $i; 
// }

// echo $i;

$names = array ("Alex", "Fred", "Mada", "Lendert");

// for ($i=sizeof($names)-1; $i>=0; $i--){
//     echo $names[$i];
// }

// echo sizeof($names); 

// foreach($names as $value){
//     echo "$value";
// }

$array = [
	["tv-show" => "Friends", "rating" => 4],
	["tv-show" => "Game of Thrones", "rating" => 5],
	["tv-show" => "Big bang theory", "rating" => 4],
	["tv-show" => "Family Guy", "rating" => 5]
];


$myarray = ["tv-show"=>"friends","rating"=> 4];
        // echo $myarray["tv-show"];
        // echo $myarray["rating"];

        foreach($myarray as $value){ 
        echo $value;
        }

        // foreach($array as $value) {
        //     echo $value["tv-show"];
        //     echo $value["rating"];

        // }