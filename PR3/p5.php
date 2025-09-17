<html>
    <body>
        <form>
            Username: <input type="text" name="uname"><br>
            Password: <input type="password" name="pass"><br>
                      <input type="submit" name="sb" value="login"> <br>
        </form>
        <?php
            if(isset($_REQUEST["sb"]))
            {
                echo "Username is :".$_REQUEST["uname"];
                echo "<br> Password is :".$_REQUEST["pass"];
            }
        ?>
    </body>
</html>