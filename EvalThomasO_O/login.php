<?php
    session_start();

    //On vérifie que le formulaire est soumis
    if (isset($_POST['login'])) {
        //On récupère le prénom 
        $prenom = $_POST['name'];

        //On enregistre le prénom en session
        $_SESSION['prenom'] = $prenom;

        //On Redirige vers index.php après la connexion
        header("Location: index.php");
        exit();
    }
?>

<form method="POST" action="login.php">
    <label for="name">Votre prénom :</label>
    <input type="text" id="name" name="name" required>
    <button type="submit" name="login">Se connecter</button>
</form>
