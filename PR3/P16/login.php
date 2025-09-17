<?php 
    header("Cache-Control:no-store,no-cache,must-revalidate");
?>
<html>
    <body>
        <form align="center">
            Username:- <input type="text" name="uname"><br><br>
            Password:- <input type="password" name="pass"><br><br>
            <input type="submit" name="sb" value="Login"><br>
        </form>
        <?php
            if(isset($_GET["sb"]))
            {
                session_start();
                $_SESSION["uname"] = $_GET["uname"];
                header("Location:home.php");
            }
        ?>
    </body>
</html>
