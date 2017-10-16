<?php


$tab = [   "dracula"=> "copola",
        "apocalypse now"=> "copola",
        "bal des vampires"=> "polanski"]; //equivalent à $tabl ("abc","def",123];


var_dump (array_keys($tab));

$assoc = [  "Jamaïque"=> "Kingston",
            "Madagascar"=> "Antananarivo",
             "Luxembourg" => "Luxembourg"];

$pays = array_keys($assoc);
$capitale = array_values($assoc);

sort($pays);

var_dump ($pays);

var_dump ($capitale);


$pays2 = array_diff($pays, $capitale);


var_dump($pays2);
     
        