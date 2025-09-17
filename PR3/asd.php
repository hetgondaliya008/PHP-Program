<html>
    <body>
        <form>
            Name: <input type="text" name="nm"><br>
            <input type="hidden" name="hd" value="<?php echo date("d-m-y"); ?>"><br>
            <input type="submit" name="sb" value="go">
            <input type="reset" name="rs" value="reset"><br>
        </form>
        <?php
            if(isset($_GET["sb"]))
            {
                echo "Name is :".$_GET["nm"];
                echo "<br> Hidden Value :".$_GET["hd"];
            }
        ?>
    </body>
</html>