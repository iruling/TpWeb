<!DOCTYPE html>
<html>
<head>
    <title>Tableau de Notes</title>
    <style>
        table {
            width: 50%;
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
            background-color: #f2f2f2;
        }
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
$notes = array(
    array("nom" => "Étudiant 1", "note" => 12),
    array("nom" => "Étudiant 2", "note" => 18),
    array("nom" => "Étudiant 3", "note" => 14),
    array("nom" => "Étudiant 4", "note" => 16),
    array("nom" => "Étudiant 5", "note" => 20)
);

function genererTableauNotes($notes) {
    echo "<table>";
    echo "<tr><th>Nom</th><th>Note</th></tr>";
    foreach ($notes as $note) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($note["nom"]) . "</td>";
        if ($note["note"] > 15) {
            echo "<td class='bold'>" . htmlspecialchars($note["note"]) . "</td>";
        } else {
            echo "<td>" . htmlspecialchars($note["note"]) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

genererTableauNotes($notes);
?>
</body>
</html>
