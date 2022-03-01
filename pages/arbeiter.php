<?php
include "session.php";
include "connect.php";
include "display_data.php";

?>
<html lang="en">
<head>
    <title>Overview </title>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
</head>

<body>
<h1>Welcome Arbeiter</h1>
<h3>Alle Aufträge:</h3>
<?php
$query = "select logo.standort, deadline, typ, art, erledigt
from logo join auftrag on logo.id = auftrag.logoid join arbeiter on auftrag.arbeiterid = arbeiter.id
 WHERE Email='$email_check' AND Passwort='$pass_check';
";
$result = mysqli_query($conn, $query);

display_data($result);
?>

<h2><a href = "../php_functions/logout.php">Sign Out</a></h2>
</body>

</html>