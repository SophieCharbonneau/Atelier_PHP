<?php

//$nb = 5;
//function fact($nb){
//   for ($i=1; $i<=$nb;++$i){
//         $nb = $nb * $i;
//         
//   }   ;
//   
//};
//
//$nb = 5;
//fact($nb);
//echo $nb ;
//
//
//
//echo "\n";

function factoriellerecursive ($nb) {
    if ($nb<=0)
        return 1;
    //$nb >0
      
     return $nb * factoriellerecursive($nb-1);
    
}
echo factoriellerecursive(5);


