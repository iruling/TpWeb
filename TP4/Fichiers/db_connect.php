<?php
$host = 'mysql_serv';
$dbname = 'tdavid';
$user = 'tdavid'; // Votre nom d'utilisateur mysql.
$password = 'ev6&il}[sv'; // Votre mot de passe mysql
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}
echo "Connexion réussie !";
?>
