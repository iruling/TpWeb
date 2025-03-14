<?php
    if ($_SERVER["REQUEST_METHOD"]== "POST") {
        $commentaire = htmlspecialchars($_POST['commentaire']);
        echo "<h3>Commentaire :</h3>";
        echo "$commentaire";
    }
 ?>