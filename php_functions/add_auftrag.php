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
    $logo=$_POST['logo_select'];
    $id=$row['ID'];
    $deadline = $_POST['deadline'];
    if($logo=== "new")
    {
        $auftragsart = $_POST['auftragsart'];
        $type_cost = explode('|',$_POST['type_select'] );
        $cost=intval($type_cost[1]);
    }
    else
    {
        $auftragsart = $_POST['auftragsart2'];
        if($auftragsart==="repair")
            $cost=190;
        else
            $cost=230;
        $query = "select logo.ID
        from logo join auftrag on logo.id = auftrag.logoid join kunde on auftrag.kundeid = kunde.id WHERE Email='$email_check' AND Passwort='$pass_check' and Standort='$logo';
        ";
        $result = mysqli_query($conn, $query);
    }
    $sql = "INSERT INTO auftrag (Preis, Erstelldatum, Deadline, Art, KundeID, LogoID, ArbeiterID)
VALUES ($cost, CURDATE() , '$deadline', '$auftragsart', $id, 1, 1);";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../pages/kunde_pages/kunde.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}


