<!DOCTYPE html>
<html>
<body>
<?php
$personnes = [
    [
        "nom" => "Petit",
        "prenom" => "Paul",
        "age" => 20
    ],
    [
        "nom" => "David", 
        "prenom" => "Vincent",
        "age" => 19
    ],
    [
        "nom" => "Leroux",
        "prenom" => "Roger", 
        "age" => 18
    ],
    [
        "nom" => "Vieux",
        "prenom" => "Jean",
        "age" => 30
    ],
    [
        "nom" => "Hamdi",
        "prenom" => "Paul",
        "age" => 22
    ]
];

foreach ($personnes as $personne) {
    echo "Nom : {$personne['nom']}, Prénom : {$personne['prenom']}, Âge : {$personne['age']} ans<br>";
}
?>
</body>
</html>