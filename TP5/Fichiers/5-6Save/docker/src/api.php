<?php

$servername = "sql";
$username = "user";
$password = "password";
$dbname = "mydatabase";


$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    //die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
    die("erreur");
}
die("succes");
// Récupérer toutes les blagues ou une blague aléatoire
if (isset($_GET['random']) && $_GET['random'] == 'true') {
    $sql = "SELECT id, texte, categorie, reponse FROM blagues ORDER BY RAND() LIMIT 1";
} else {
    $sql = "SELECT id, texte, categorie, reponse FROM blagues";
}

$result = $conn->query($sql);

$blagues = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $blagues[] = $row;
    }
}

// Afficher les blagues en JSON
echo json_encode($blagues);

$conn->close();
?>
