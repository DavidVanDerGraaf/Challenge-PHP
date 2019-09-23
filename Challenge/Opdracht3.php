<!DOCTYPE html>
<html>

<body>
<?php
$boodschappen = array('aardappelen', 'aardbeien', '3 pakken melk', 'yoghurt');
echo "<ul>";
foreach($boodschappen as $boodschap) {
    echo "<li>".$boodschap."</li>";
}
echo "</ul>"

?>
</body>

</html>