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
    <a class="logout" href = "../../php_functions/logout.php">Ausloggen</a>
    <a class="name" ><?php echo $login_session?></a>
</div>


<form class="returnOrder" action="../../php_functions/add_auftrag.php" method="post">
    <h4 class="returnTitle"> Auftrag hinzufügen </h4>
    <br>
    <label for="deadline">Deadline:</label>
    <input type="date" id="deadline" name="deadline">

    <label for="logo_select">Logo-Standort:
    </label>
    <select class="type_select" id="logo_select" name="logo_select">
        <option value="new">new</option>
        <?php
        $query = "select distinct standort
from logo join auftrag on logo.id = auftrag.logoid join kunde on auftrag.kundeid = kunde.id WHERE Email='$email_check' AND Passwort='$pass_check' order by Erstelldatum;
";
        $result = mysqli_query($conn, $query);

        display_options($result);
        ?>
    </select>
    <div id="advanced">
        <label for="location">Gebäudeort:</label><input type="text" id="location" placeholder="location"
        name="location">
        <label for="type_select">Logotyp:</label>
        <select class="type_select" id="type_select" name="type_select">
            <option value="A1|1200">A1 - 1200€</option>
            <option value="A2|1100">A2 - 1100€</option>
            <option value="A3|1000">A3 - 1000€</option>
            <option value="B1|800">B1 - 800€</option>
            <option value="B2|600">B2 - 600€</option>
            <option value="B3|500">B3 - 500€</option>
        </select>
        <label for="auftragsart">Auftragsart:
        </label><select class="drop-down" name="auftragsart" id="auftragsart">
            <option value="new">Anbringen</option>
        </select>
    </div>
    <div id="advanced2" style="display:none">
        <label for="auftragsart2">Auftragsart:
        </label><select class="drop-down" name="auftragsart2" id="auftragsart2">
            <option value="repair">Reparieren</option>
            <option value="delete">Abbauen</option>
        </select>
    </div>
    <br>
    <?php
    if(isset($_SESSION["error"])){
        $error = $_SESSION["error"];
        echo "<span>$error</span>";
    }
    ?>
    <input type="submit" value="Auftrag hinzufügen">
    <script>
        document.getElementById("logo_select").onchange = function () {
            document.getElementById("advanced2").style.display = document.getElementById("logo_select").value === "new" ? "none" : "block";
            document.getElementById("advanced").style.display = document.getElementById("logo_select").value === "new" ? "block" : "none";
        };
    </script>
</form>

</body>

</html>

<?php
unset($_SESSION["error"]);
?>