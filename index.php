    <?php
    session_start();
    ?>

    <!DOCTYPE html>
            <html>
            <head>
                <title>Log In</title>
                <link rel="stylesheet" href="style.css">
            </head>
            <body>
                <div class="container_login">
            <form method="post" action="login.php" >
                <div id="div_login">
                    <h1>Login</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_email" name="txt_email" placeholder="Email" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Login" name="but_login" id="but_login" />
                    </div>  
                </div>
            </form>
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