<?php
require('connect.php');
$id=$_REQUEST['id'];
$query = "UPDATE auftrag SET Erledigt='Y' WHERE id=$id;";
$result = mysqli_query($conn, $query);
if ($result) {
    header("Location: ../pages/arbeiter_pages/arbeiter.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
