<?php
include "../../php_functions/session.php";
include "../../php_functions/connect.php";
include "../../php_functions/display_data.php";
?>
<html lang="en">
<head>
    <title>Overview </title>
    <link rel="shortcut icon" type="image/png" href="../../images/favicon.png"/>
    <link rel="stylesheet" href="../../css_files/overview.css">
</head>

<body>
<div class="topnav">
    <a href="kunde.php">Alle Aufträge</a>
    <a class="active" href="add_auftrag.php">Auftrag hinzufügen</a>
    <a class="logout" href = "../../php_functions/logout.php">Sign Out</a>
</div>
<h1>Willkommen Kunde</h1>


<form class="returnOrder" action="../../php_functions/add_auftrag.php" method="post">
    <h4 class="returnTitle"> Auftrag hinzufügen </h4>
    <br>

        <label for="location">Gebäudeort:</label><input type="text"
                                           id="location"
                                           placeholder="location">
<br>
    <label for="type_select">Logotyp::</label>
    <select class="drop-down" name="type" id="type_select">
        <option value="A1">A1 - 1200€</option>
        <option value="A2">A2 - 1100€</option>
        <option value="A3">A3 - 1000€</option>
        <option value="B1">B1 - 800€</option>
        <option value="B2">B2 - 600€</option>
        <option value="B3">B3 - 500€</option>
    </select>
    <br>
    <label for="deadline">Deadline:</label>
    <input type="date" id="deadline" name="deadline">
    <br>

    <label for="auftragsart">Auftragsart:
    </label><select class="drop-down" name="auftragsart" id="auftragsart">
        <option value="repair">Reparieren</option>
        <option value="new">Anbringen</option>
        <option value="delete">Abbauen</option>
    </select>
    <br>
    <input type="submit" value="Auftrag hinzufügen">
</form>

</body>

</html>