<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$host = 'mysql_serv';
$dbname = 'tdavid';
$user = 'tdavid'; // Votre nom d'utilisateur mysql.
$password = 'ev6&il}[sv'; // Votre mot de passe mysql
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>user</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>";
    var_dump($row);
    echo "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

mysqli_close($conn);
?>
</body>
</html>
