<!DOCTYPE html>
<html>
<body>
 
<?php

function moyenne($notes){

    foreach ($notes as $a) {
        $notesC += $a;
    };
    $notes = $notesC / count($notes);
    return $notes;
}
$notes = array(12,15,18,17,12,18,20,18);
echo moyenne($notes);
?>
</body>
</html>
