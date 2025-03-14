<!DOCTYPE html>
<html>
<head>
    <title>Menu de Navigation</title>
    <style>
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav li {
            float: left;
        }
        nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>
<?php
// Tableau contenant les pages
$pages = array(
    array("nom" => "Accueil", "lien" => "index.php"),
    array("nom" => "Services", "lien" => "services.php"),
    array("nom" => "Contact", "lien" => "contact.php")
);

// Fonction pour générer un menu de navigation
function genererMenu($pages) {
    echo "<nav>";
    echo "<ul>";
    foreach ($pages as $page) {
        echo "<li><a href='" . htmlspecialchars($page["lien"]) . "'>" . htmlspecialchars($page["nom"]) . "</a></li>";
    }
    echo "</ul>";
    echo "</nav>";
}

// Appel de la fonction pour générer le menu de navigation
genererMenu($pages);
?>
</body>
</html>
