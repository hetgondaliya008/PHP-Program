<html>
    <body>
        <form>
            <input type="submit" name="sb" value="Blue">
            <input type="submit" name="sb" value="Red">
            <input type="submit" name="sb" value="Green">
        </form>
        <?php
            if(isset($_GET["sb"]))
            {
                if($_GET["sb"] == "Blue")
                    echo "<body bgcolor ='blue'>";
                elseif($_GET["sb"] == "Red")
                    echo "<body bgcolor ='red'>";
                else
                    echo "<body bgcolor ='green'>";
            }
        ?>
    </body>
</html>