<html>
    <head>
        <style>
            a {color:white}
            td { 
                background-color: #154D71;
                text-align:center ; 
                color:white;
                border-radius: 5px;
                height: 30px;
            }
            body {
                margin: 10px;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <form>
            <table align="center" border="4">
                <tr>
                    <td colspan="5" align="center">Login</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="sb" value="login">
                        <input type="reset" name="re" value="Reset">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Not Registerd ? <a href="register.php">Login Here</a>
                    </td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_GET["sb"]))
            {
                $a=$_GET["email"];
                $b=$_GET["pass"];
                if($a=="abc@gmail.com" && $b="abc123")
                    echo "<script>alert ('Login Successfull')</script>";
                else
                    echo "Invalid Data";
            }
        ?>
    </body>
</html>