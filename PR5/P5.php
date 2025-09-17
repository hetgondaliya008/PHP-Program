<html>
    <body>
        <form>
            Name: <input type="text" name="nm"><br>
            Mobile: <input type="text" name="mb"><br>
            <input type="submit" name="sb" value="Insert">
        </form>
        <?php
            if(isset($_GET["sb"]))
            {
                $a=$_GET["nm"];
                $b=$_GET["mb"];
                $c = mysqli_connect("localhost","root","");
                if($c)
                {
                    mysqli_select_db($c,"employee2");
                    $d="insert into edata values('$a','$b')";
                    if(mysqli_query($c,$d))
                        echo "Record is inserted successfully";
                    else
                        echo mysqli_error($c);
                }
            }
        ?>
    </body>
</html>