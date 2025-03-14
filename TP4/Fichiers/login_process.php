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

    $user_name = "'". $_POST['user_name']. "'";
    $user_password = "'" . $_POST['password'] . "'";



    echo"$user_name, $user_password";

    $query = "SELECT * FROM users WHERE user_name = "."$user_name"." AND user_password = "."$user_password"."";

    if (mysqli_num_rows($result) > 0) {
        echo "binevenu" . "$user_name";
    } else {
        echo "Identifiants incorrects.";
    }

    mysqli_close($conn);
    ?>






?>

</body>

</html>