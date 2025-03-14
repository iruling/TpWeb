<!DOCTYPE html>
<html>
<head>
    <title>Tableau de Produits</title>
    <style>
        table {
            width: 75%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color:rgb(255, 0, 0);
        }
    </style>
</head>
<body>
<?php
$produits = array(
    array("nom" => "Produit 1", "prix" => 10.99, "quantite" => 50),
    array("nom" => "Produit 2", "prix" => 20.49, "quantite" => 30),
    array("nom" => "Produit 3", "prix" => 5.99, "quantite" => 100),
    array("nom" => "Produit 4", "prix" => 15.75, "quantite" => 20)
);

function genererTableauHTML($produits) {
    echo "<table>";
    echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";
    foreach ($produits as $produit) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($produit["nom"]) . "</td>";
        echo "<td>" . htmlspecialchars($produit["prix"]) . " €</td>";
        echo "<td>" . htmlspecialchars($produit["quantite"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

genererTableauHTML($produits);
?>
</body>
</html>
