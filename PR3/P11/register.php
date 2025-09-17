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
            <table align="center" border="4" >
                <tr>
                    <td colspan="5" align="center">Registration</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="nm"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Mo.</td>
                    <td><input type="text" name="mb"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="sb" value="Sign up">
                        <input type="reset" name="re" value="Reset">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Alredy Registerd ? <a href="login.php">Login Here</a>
                    </td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_GET["sb"]))
            {
                if(isset($_GET["nm"]) && isset($_GET["email"]) && isset($_GET["mb"]) && isset($_GET["city"]))
                {
                    echo "<script>alert ('Registeration is done successfully')</script>";
                   // header("Location: login.php");
                }
            }
        ?>
    </body>
</html>