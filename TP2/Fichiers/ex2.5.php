<!DOCTYPE html>
<html>
<body>
<?php
$fruits = ['Pomme', 'Orange', 'Banane', 'Fraise', 'Kiwi'];

if (in_array('Banane', $fruits)) {
   echo "La Banane est présente dans le tableau.";
} else {
   echo "La Banane n'est pas dans le tableau.";
}
?>

</body>
</html>