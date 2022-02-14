<?php
session_start();

include "connect.php";

if (isset($_POST["txt_email"]) && isset($_POST["txt_pwd"])) {
    $email = $_POST["txt_email"];
    
    $pass = $_POST["txt_pwd"];
    
    if (empty($email)) {
        $_SESSION["error"] = 'Email is required';
        header("Location: index.php");
        exit();
    } elseif (empty($pass)) {
        $_SESSION["error"] = 'Password is required';
        header("Location: index.php");
        exit();
    } else {
        if ($email === "admin" && $pass === "1234") {
            $_SESSION["Email"]    = "admin";
            $_SESSION["Passwort"] = "1234";
            $_SESSION["Mode"]     = "Admin";
            header("Location: admin.php");
        } else {
            $sql = "SELECT * FROM arbeiter WHERE Email='$email' AND Passwort='$pass'";
            
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                    
                    $_SESSION["Email"] = $row["Email"];
                    
                    $_SESSION["Passwort"] = $row["Passwort"];
                    
                    $_SESSION["Mode"] = "Arbeiter";
                    header("Location: arbeiter.php");
                    exit();
            } else {
                $sql = "SELECT * FROM kunde WHERE Email='$email' AND Passwort='$pass'";
                
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) === 1) {
                    $row = mysqli_fetch_assoc($result);
                        
                        $_SESSION["Email"] = $row["Email"];
                        
                        $_SESSION["Passwort"] = $row["Passwort"];
                        
                        $_SESSION["Mode"] = "Kunde";
                        header("Location: kunde.php");
                        exit();

                }
                else {
                        $_SESSION["error"] = "username/password incorrect";
                        header("Location: index.php");
                        exit();
                    }
            }
        }
    }
} else {
    $_SESSION["error"] = "username/password incorrect";
    header("Location: index.php");
}


?>