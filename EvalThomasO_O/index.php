<?php
// Ressources utilisés :
// https://www.php.net/manual/fr/class.mysqli.php
// https://www.php.net/manual/fr/tutorial.forms.php
// https://www.php.net/manual/en/function.htmlspecialchars.php
// https://www.w3schools.com/html/html_forms.asp
// https://www.w3schools.com/jsref/event_onclick.asp
// Base de données utilisé : MariaDB
?>

<?php
session_start();

// Vérif de si l'utilisateur est connecté sinon redirection vers la page de connexion
if (!isset($_SESSION['prenom'])) {
    header("Location: login.php");
    exit();
}

// Info pour se connecter à la base de données (à changer vu que base de données locale)
$servername = "localhost";
$username = "thomas";
$password = "Gt17042003";
$dbname = "exam";

// Connexion à la base de données
$connection = new mysqli($servername, $username, $password, $dbname);

// Vérif de la connexion
if ($connection->connect_error) {
    die("Échec de la connexion : " . $connection->connect_error);
}

// Ajouter un utilisateur en base de données si le formulaire est soumis
if (isset($_POST['add']) && !empty($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    
    // Préparer et exécuter la requête d'insertion
    $stmt = $connection->prepare("INSERT INTO users (name) VALUES (?)");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->close();
}

// Réinitialiser les utilisateurs si le bouton "reset" est cliqué et le déconecter de la session
if (isset($_POST['reset'])) {
    $connection->query("DELETE FROM users");
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

// Déconnexion de l'utilisateur
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

// Récupéreration de tout les utilisateurs enregistrés
$result = $connection->query("SELECT * FROM users");
$users = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <script>
        //Code JS pour demander une confirmation avant de réinitialiser les utilisateurs 
        document.addEventListener('DOMContentLoaded', function () {
            const resetButton = document.querySelector("button[name='reset']");
            resetButton.addEventListener('click', function (event) {
                // On demande la confirmation avant de soumettre le formulaire
                const confirmation = confirm("Êtes-vous sûr de vouloir réinitialiser la liste des utilisateurs ?");
                if (!confirmation) {
                    event.preventDefault(); // On annuler l'événement de soumission du formulaire si l'utilisateur annule
                }
            });
        });
    </script>
</head>
<body>
    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['prenom']); ?>!</h1>

    <h2>Ajouter un utilisateur</h2>
    <p>Vous pouvez ajouter un nouvel utilisateur en remplissant le formulaire ci-dessous.</p>
    <form method="POST">
        <input type="text" name="name" required>
        <button type="submit" name="add">Ajouter</button>
    </form>

    <h2>Se déconnecter</h2>
    <p>Vous pouvez vous déconnecter en cliquant sur le bouton ci-dessous.</p>
    <form method="POST">
        <button type="submit" name="logout">Se déconnecter</button>
    </form>

    <h2>Réinitialiser les utilisateurs</h2>
    <p>Vous pouvez réinitialiser la liste des utilisateurs en cliquant sur le bouton ci-dessous.</p>
    <p><strong>Cette action est irréversible!</strong></p>
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser les utilisateurs</button>
    </form>

    <h2>Liste des utilisateurs</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo htmlspecialchars($user['name']); ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>

<?php
// On ferme la connexion à la base de données en fin de code
$conn->close();
?>
