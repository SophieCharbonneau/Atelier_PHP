<?php

$tab = [];
$tab[0] = ["a","b",1000];

echo count ($tab[0]);
echo "\n";

$tab[1] = ["a","b","c","d"];

echo count ($tab[1]);
echo "\n";

$tab2 = ["horreur", "comedie", "humour"];
$texte = implode (",", $tab2);
echo $texte;
echo "\n";
$string = "dracula***la soupe aux choux***nosferatu";
$tab3= explode("***", $string);
var_dump($tab3);
echo count ($tab3);

$tab4= ["Dracula", "screams", "le bal des vampires", "nosferatu"];
$tab5= ["screams", "le bal des vampires", "la soupe aux choux", "Profs", "les sous-doués"];

echo "\n";
$tab6= array_intersect($tab4, $tab5);
var_dump ($tab6);

echo "\n";

$tab7= array_diff($tab5,$tab4);
var_dump($tab7);
echo "\n";


