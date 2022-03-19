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
    <a class="active" href="kunde.php">Alle Aufträge</a>
    <a href="add_auftrag.php">Auftrag hinzufügen</a>
    <a class="logout" href = "../../php_functions/logout.php">Sign Out</a>
    <a class="name" ><?php echo $login_session?></a>
</div>
<h3>Alle Aufträge:</h3>
<?php
$query = "select preis, art, erstelldatum, standort, deadline, erledigt
from logo join auftrag on logo.id = auftrag.logoid join kunde on auftrag.kundeid = kunde.id WHERE Email='$email_check' AND Passwort='$pass_check';
";
$result = mysqli_query($conn, $query);

display_data($result);
?>

</body>

</html>