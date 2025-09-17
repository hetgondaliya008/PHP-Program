<html>
    <body>
        <form>
            No-1 <input type="number" min=1 max=100 step=1 name=n1> <br>
            No-2 <input type="number" min=1 max=100 step=1 name=n2> <br>
            <input type="submit" name="sb" value="Add"> <br>
        </form>
        <?php
            if(isset($_GET["sb"]))
            {
                $a=$_GET["n1"];
                $b=$_GET["n2"];
                $c=$a+$b;
                echo "Addition is: $c";
            }
        ?>
    </body>
</html>