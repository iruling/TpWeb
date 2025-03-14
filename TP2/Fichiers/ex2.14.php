<!DOCTYPE html>
<html>
<body>
 <?php
/*
Créer une fonction filtrerTableau($tab, $limite) 
qui retourne un tableau contenant uniquement 
les nombres supérieurs à $limite.
*/

function filtrerTableau($tab,$limite)
{
    foreach ($tab as $element) 
    {
        if ($element > $limite) 
        {
        echo $element . "<br>";
    };
    }
};
$tab1 = array(1,5,6,9,10,15,20,57);
$tab2 = array(1,5,6,20,51,42);
$tab3 = array(1,5,6,);

filtrerTableau($tab1,20);



?>
</body>
</html>
