<html>
<body>
    <table border="1" align="center" style="background-color:rgb(223, 186, 23);">
    <form method="get" target="blank">
        <tr>
            <td>Username : </td> 
            <td><input type="text" name="uname"> </td>
        </tr>
        <tr>
            <td>Password : </td>
            <td><input type="password" name="pass"> </td>
        </tr>
        <tr>
            <td colspan=2 align="center"> <input type="submit" name="sb" value="Login"></td>
        </tr>
    </form>
    </table>
    <?php 
        if( isset ($_GET["sb"]))
        {
            echo "Username :".$_GET["uname"];
            echo "<br> Password :".$_GET["pass"];
        }
    ?>
</body>
</html>