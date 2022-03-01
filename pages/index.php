<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In</title>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
    <link rel="stylesheet" href="../css_files/style.css">
</head>
<body>
<div class="parent clearfix">
    <div class="bg-illustration">
        <img src="../images/favicon.png" alt="logo">

        <div class="burger-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>

    <div class="login">
        <div class="container">
            <h1>Login to access to<br />your account</h1>

            <div class="login-form">
                <form method="post" action="../php_functions/login.php" >
                    <label for="txt_email"></label><input type="email" class="textbox" id="txt_email" name="txt_email" placeholder="Email" />

                    <label for="txt_pwd"></label><input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>

                    <div class="error-message">
                        <?php
                        if(isset($_SESSION["error"])){
                            $error = $_SESSION["error"];
                            echo "<span>$error</span>";
                        }
                        ?>
                    </div>
                    <div class="forget-pass">
                        <a href="#">Forgot Password ?</a>
                    </div>
                    <button type="submit">Login</button>

                </form>
            </div>

        </div>
    </div>
</div>
</body>
</html>

<?php
unset($_SESSION["error"]);
?>