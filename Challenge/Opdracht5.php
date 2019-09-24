<?php
session_start();
if(isset($_GET['type'])){
    if($_GET['type'] == "add"){
        $boodschappen = $_GET['item'];
        $boodschappen_toevoegen = $_GET['item'];
        $boodschappen_toevoegen = str_replace(" ", "", $boodschappen_toevoegen);
        $_SESSION[$boodschappen_toevoegen] = $boodschappen;

    }

    else if($_GET['type'] == "delete"){
        unset($_SESSION[$_GET['item']]);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Opdracht5</title>
</head>

<body>
<form method="get">
    <input type="text" name="item" required>
    <input type="hidden" name="type" value="add">
    <input type="submit">
</form>
<ul>
    <?php
    foreach($_SESSION as $verwijderen => $boodschap){
        echo "<a href='?item=".$verwijderen."&type=delete'><li>".$boodschap."</li></a>";
    }
    ?>
</ul>
</body>

</html>