<!DOCTYPE html>
<html>
<body>
 
<?php
function afficherTableau($tab) {
   foreach ($tab as $element) {
       echo $element . "<br>";
   }
}

$villes = ['Paris', 'Lyon', 'Marseille', 'Toulouse', 'Nice'];
afficherTableau($villes);
?>
</body>
</html>
