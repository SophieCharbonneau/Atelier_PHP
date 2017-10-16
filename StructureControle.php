<?php

$ligne = 1;
$tab =[];

while ($ligne <=10) {
    $colonne = 1;
    while ($colonne <=10) {
        $tab[$ligne][$colonne]= $ligne * $colonne;
        echo $tab[$ligne][$colonne] . " " ;
        $colonne = $colonne + 1;
    }
    echo "\n";
    $ligne = $ligne + 1;
};

