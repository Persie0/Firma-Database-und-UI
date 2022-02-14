                <?php 

                session_start(); 

                include "connect.php";

                if (isset($_POST['txt_email']) && isset($_POST['txt_pwd'])) {

                    $email = $_POST['txt_email'];

                    $pass = $_POST['txt_pwd'];

                    if (empty($email)) {

                        header("Email is required");

                        exit();

                    }else if(empty($pass)){

                        header("Password is required");

                        exit();

                    }else{
                        $sql = "SELECT * FROM arbeiter WHERE Email='$email' AND Passwort='$pass'";

                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) === 1) {

                            $row = mysqli_fetch_assoc($result);

                            if ($row['Email'] === $email && $row['Passwort'] === $pass) {

                                echo "Logged in!";

                                $_SESSION['Email'] = $row['Email'];

                                $_SESSION['Passwort'] = $row['Passwort'];

                                exit();

                            }else{

                                exit();

                            }
                        }else{

                                exit();

                            }

                        }

                }else{

                    header("Location: index.html");

                    exit();
                }

        if (isset($_SESSION['Email']) && isset($_SESSION['Passwort'])) {

         ?>

        <!DOCTYPE html>

        <html>

        <head>

            <title>HOME</title>

            <link rel="stylesheet" type="text/css" href="style.css">

        </head>

        <body>

             <h1>Hello</h1>

             <a href="logout.php">Logout</a>

        </body>

        </html>

        <?php 

        }else{

             ?>

        <!DOCTYPE html>

        <html>

        <head>

            <title>HOME</title>

            <link rel="stylesheet" type="text/css" href="style.css">

        </head>

        <body>

             <h1>Hello</h1>

             <a href="logout.php">Logout</a>

        </body>

        </html>

        <?php 

             exit();

        }

         ?>