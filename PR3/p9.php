<html>
    <body>
        <form method="POST">
            Slect Location : <select name="loc">
                <option value="https://www.google.com">Google</option>
                <option value="http://www.yahoo.com">Yahoo</option>
                <option value="http://www.gtu.ac.in">GTU</option>
            </select>
            <input type="submit" value="Go" name="sb">
        </form>

        <?php
            if(isset($_POST["sb"]))
            {
                $a=$_POST["loc"];
                header("Location:".$a);
            }
        ?>
    </body>
</html>