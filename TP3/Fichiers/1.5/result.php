<?php
    $nom = htmlentities($_POST['nom']);
    $prenom = htmlentities($_POST['prenom']);
    $email = htmlentities($_POST['email']);

    $nom = trim($nom);
    $prenom = trim($prenom);   
    $email = trim($email);
    


    if(empty($nom) || empty($prenom) || empty($email)){
        echo "erreur merci de sasir tout les champs";
    }
    else{
        echo "Bonjour Mr, " . $nom . ", " . $prenom . ", votre adresse mail et : " . $email;
    };
?>
