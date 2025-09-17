<html>
    <body>
        <form method="POST" action="multibutton.php">
    username:<input type="text" name="nm"><br>
    password:<input type="password" name="pass"><br>
    <input type ="submit" name="sb" value="display username"><br>
    <input type ="submit" name="sb" value="display password"><br>
</form>
<?php
if (isset($_POST["sb"]))
{
    if($_POST["sb"])=="display username")
       echo "username is:".$_POST["nm"];
       else
       echo "password is:".$_POST["nm"];
}
?>
</body>
</html>