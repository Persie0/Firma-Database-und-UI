<?php
include "session.php";
include "connect.php";
include "display_data.php";

?>
<html lang="en">
<head>
    <title>Overview </title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
</head>

<body>
<h1>Welcome Admin</h1>
<h3>Offene Aufträge:</h3>
<?php
$query = "select Deadline,Preis,Erstelldatum,Art,Standort,Zustand,Typ,Vorname as 'Arbeitervorname',Nachname as 'Arbeiternachname' from auftrag join logo on logo.id = auftrag.logoid join arbeiter on arbeiter.ID = auftrag.ArbeiterID where erledigt = 'N' order by Deadline;";
$result = mysqli_query($conn, $query);

display_data($result);
?>

<h2><a href = "logout.php">Sign Out</a></h2>
</body>

</html>