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
<h3>Auftrag hinzufügen</h3>


<form action="../../php_functions/add_auftrag.php" method="post">
        Location:
        <label for="location"></label><input type="text"
                                           id="location"
                                           placeholder="location">
<br>
    <label for="type_select">Choose a type:</label>
    <select name="type" id="type_select">
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3</option>
    </select>
    <br>
    <label for="deadline">Deadline:</label>
    <input type="date" id="deadline" name="deadline">
    <br>
    Auftragsart:
    <label for="auftragsart">
    </label><select name="auftragsart" id="auftragsart">
        <option value="repair">repair</option>
        <option value="new">anbringen</option>
        <option value="delete">abbauen</option>
    </select>
    <br>
    <input type="submit" value="Submit">
</form>

</body>

</html>