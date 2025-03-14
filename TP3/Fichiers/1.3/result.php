<?php
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    echo "Bonjour Mr, " . $nom . ", " . $prenom . ", votre adresse mail et : " . $email;
?>
