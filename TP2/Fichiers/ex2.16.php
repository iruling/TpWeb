<!DOCTYPE html>
<html>
<body>
<?php

$tab12 = array("bonjour", "salut", "test", "merci");

function mettreMajuscule($mots) {
    $motsMajuscule = array();
    foreach ($mots as $mot) {
        $motsMajuscule[] = strtoupper($mot);
    }
    return $motsMajuscule;
}

function afficherTableau2($tab) {
    foreach ($tab as $element) {
        echo $element . "<br>";
    }
}

afficherTableau2(mettreMajuscule($tab12));

?>
</body>
</html>
