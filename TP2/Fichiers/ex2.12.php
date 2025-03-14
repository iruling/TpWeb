<!DOCTYPE html>
<html>
<body>
 
<?php

// ex pour 4 4!=1×2×3×4=24
function factorielle($n) {
    
    $resultat = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultat *= $i;
    }
    return $resultat;
}

echo factorielle($n = 170)


?>
</body>
</html>
