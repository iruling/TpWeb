<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pays_choisi = htmlspecialchars($_POST['pays']);
        echo "<h2>Pays choisi : $pays_choisi</h2>";
    };
?>