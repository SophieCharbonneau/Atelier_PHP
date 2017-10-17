<?php

//$ligne = 1;
//$tab =[];
//
//while ($ligne <=10) {
//    $colonne = 1;
//    while ($colonne <=10) {
//        $tab[$ligne][$colonne]= $ligne * $colonne;
//        echo $tab[$ligne][$colonne] . " " ;
//        $colonne = $colonne + 1;
//    }
//    echo "\n";
//    $ligne = $ligne + 1;
//};
//shuffle($tab);
$largeur = rand(5,15);
$hauteur = rand(5,15);
$nbbombes = rand(1,15);

var_dump ($largeur);
var_dump ($hauteur);
var_dump ($nbbombes);
$ligne = 0;
$bombe = 0;
//while ($ligne <= $largeur) {
//    $colonne = 0;
//    while ($colonne <= $hauteur){
//        
//        $value = (bool)rand(0,1);
//        if $b <= $nbbombes 
//                if $value ==true 
//                $tab[$ligne][$colonne]= "B";
//                echo $tab[$ligne][$colonne] . " " ;
//                else {}
//                $tab[$ligne][$colonne]= "x";
//                echo $tab[$ligne][$colonne] . " " ;
//                $b++;
//                endif;
//        else
//            $tab[$ligne][$colonne]= "*";
//            echo $tab[$ligne][$colonne] . " " ;
//            $colonne = $colonne + 1;
//        endif;
//    }
//    $ligne = $ligne + 1;
//    echo "\n";
//};

$largeur =10;
$hauteur =10;
$nbbomb = 25;

//rempli tout le tableau d' *
for($i=0;$i<$largeur;$i++){
    for ($j=0;$j<$hauteur;$j++){
        $tab[$i][$j] = "*";
    }
}

//place bombes
for($i=0;$i<$nbbomb;$i++){
    $x = rand(0,$largeur);
    $y = rand(0,$hauteur);
        $i--;
        continue;
    }
        if ($tab[$x][$y]=="B"){

    // pas de bomb
    
    $tab[$x][$y] = "B";
}

//affichage
for($i=0;$i<$largeur;$i++){
    for ($j=0;$j<$hauteur;$j++){
        echo$tab[$i][$j];
    }
    
    echo "\n";
}