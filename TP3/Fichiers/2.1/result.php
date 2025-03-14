<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $genre = $_POST['genre'];
        echo "Genre sélectionné : " . htmlspecialchars($genre);
    };
    
?>