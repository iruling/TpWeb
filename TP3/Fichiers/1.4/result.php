<?php
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);


    if(empty($nom) || empty($prenom) | empty($email)){
        echo "erreur merci de sasir tout les champs";
    }
    else{
        echo "Bonjour Mr, " . $nom . ", " . $prenom . ", votre adresse mail et : " . $email;
    };
?>
