<!DOCTYPE html>
<html>
<body>
<?php
$contacts = array(
    array("nom" => "Dupont", "prenom" => "Jean", "email" => "jean.dupont@example.com"),
    array("nom" => "Martin", "prenom" => "Marie", "email" => "marie.martin@example.com"),
    array("nom" => "Durand", "prenom" => "Paul", "email" => "paul.durand@example.com"),
    array("nom" => "Lefevre", "prenom" => "Sophie", "email" => "sophie.lefevre@example.com")
);

function afficherContacts($contacts) {
    echo "<ul>";
    foreach ($contacts as $contact) {
        echo "<li>";
        echo "Nom: " . htmlspecialchars($contact["nom"]) . "<br>";
        echo "Prénom: " . htmlspecialchars($contact["prenom"]) . "<br>";
        echo "Email: " . htmlspecialchars($contact["email"]);
        echo "</li>";
    }
    echo "</ul>";
}

afficherContacts($contacts);
?>
</body>
</html>
