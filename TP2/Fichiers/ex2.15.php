<!DOCTYPE html>
<html>
<body>
<?php
/*
Créer une fonction genererTableau($taille) 
qui retourne un tableau contenant $taille nombres aléatoires.
Afficher le tableau retourné.
array_push(array &$array, mixed ...$values): int
*/
function genererTableau($taille)
{
    $tableau1 = array();
    for($i = 0; $i < $taille; $i++){
    array_push($tableau1, rand(0, 10000));
    };
    return $tableau1;
};
function afficherTableau1($tab) {
   foreach ($tab as $element) {
       echo $element . "<br>";
   }
};
afficherTableau1(genererTableau(10));







?>




</body>


</html>