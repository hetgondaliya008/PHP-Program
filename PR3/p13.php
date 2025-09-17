<html>
    <body>
        <form>
            <input type="checkbox" name="c[]" value="1 (1).jpg">Image1<br>
            <input type="checkbox" name="c[]" value="1 (2).jpg">Image2<br>
            <input type="checkbox" name="c[]" value="1 (3).jpg">Image3<br><br>
            <input type="submit" name="sb" value="Display">
        </form>
        <?php
            if(isset($_GET["sb"]))
            {
                $a=$_GET["c"];
                foreach($a as $i)
                {
                    echo "<img src='$i'></img>";
                }
            }
        ?>
    </body>
</html>