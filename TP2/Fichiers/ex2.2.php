<!DOCTYPE html>
<html>
<body>
 
<?php

$prenom = array("paul", "vincent","roger","jean","paul");

echo 'tableau avant les modifications :' . "<br>";
foreach ($prenom as $a) {
    echo "$a <br>";
}
array_push($prenom, "raphaël");
echo 'tableau apres les modifications :' . "<br>";
foreach ($prenom as $a) {
    echo "$a <br>";
}
?>

</body>
</html>
