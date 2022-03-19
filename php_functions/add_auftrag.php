<?php
include "connect.php";
session_start();

$email_check = $_SESSION["Email"];
$pass_check = $_SESSION["Passwort"];
$sql = "SELECT * FROM kunde WHERE Email='$email_check' AND Passwort='$pass_check'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1)
{
    $row = mysqli_fetch_array($result);
    $id=$row['ID'];
    $deadline = $_POST['deadline'];
    $auftragsart = $_POST['auftragsart'];
    $string_type_cost=$_POST['type_select'];
    $type_cost = explode('|',$string_type_cost );
    $cost=intval($type_cost[1]);
    $sql = "INSERT INTO auftrag (Preis, Erstelldatum, Deadline, Art, KundeID, LogoID, ArbeiterID)
VALUES ($cost, CURDATE() , '$deadline', '$auftragsart', $id, 1, 1);";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../pages/kunde_pages/kunde.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}


