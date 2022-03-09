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
    <a class="active" href="admin.php">Alle Aufträge</a>
    <a class="logout" href = "../../php_functions/logout.php">Sign Out</a>
</div>

<h1>Welcome Admin</h1>
<h3>Offene Aufträge:</h3>
<?php
$query = "select Deadline,Preis,Erstelldatum,Art,Standort,Zustand,Typ,Vorname as 'Arbeitervorname',Nachname as 'Arbeiternachname' from auftrag join logo on logo.id = auftrag.logoid join arbeiter on arbeiter.ID = auftrag.ArbeiterID where erledigt = 'N' order by Deadline;";
$result = mysqli_query($conn, $query);

display_data($result);
?>

</body>

</html>