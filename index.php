    <?php
    session_start();
    ?>

    <!DOCTYPE html>
            <html lang="en">
            <head>
                <title>Log In</title>
                <link rel="stylesheet" href="style.css">
            </head>
            <body>
            <div class="parent clearfix">
                <div class="bg-illustration">
                    <img src="https://i.ibb.co/Pcg0Pk1/logo.png" alt="logo">

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
                            <form method="post" action="login.php" >
                                <label>
                                    <label for="txt_email"></label><input type="text" class="textbox" id="txt_email" name="txt_email" placeholder="Email" />
                                </label>
                                <label for="txt_pwd"></label><input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>

                                <div class="remember-form">
                                    <label>
                                        <input type="checkbox">
                                    </label>
                                    <span>Remember me</span>
                                </div>
                                <div class="forget-pass">
                                    <a href="#">Forgot Password ?</a>
                                </div>

                                <button type="submit">LOG-IN</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
                     <?php
                        if(isset($_SESSION["error"])){
                            $error = $_SESSION["error"];
                            echo "<span>$error</span>";
                        }
                    ?>
            </body>
            </html>

    <?php
        unset($_SESSION["error"]);
    ?>