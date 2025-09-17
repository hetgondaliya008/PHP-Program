<html>
    <body>
        <form method="POST">
            Semester:<select name="sem">
                <option>Semester 1</option>
                <option>Semester 2</option>
                <option>Semester 3</option>
                <option>Semester 4</option>
            </select>

            Subject:<select size=4 name="sub[]" multiple="multiple">
                <option>Java</option>
                <option>PHP</option>
                <option>.NET</option>
                <option>NS</option>
            </select>
            <input type="submit" name="sb" value="Display">
        </form>

        <?php
            if(isset($_POST["sb"]))
            {
                if(isset($_POST["sem"]) && isset($_POST["sub"]))
                {
                    echo "Sem is :".$_POST["sem"]."<br>";
                    $a=$_POST["sub"];
                    $s="Sub are :";
                    foreach ($a as $i)
                    {
                        $s = $s.$i."<br>";
                    }
                    echo $s."<br>";
                }
                else
                    echo ":<script> alert('Please select data'); </script>";
            }
        ?>
    </body>
</html>