<html>
    <body>
        <form method="post">
            <table border="1">
            <tr><td>Semester</td>
                <td><input type="radio" name="sem" value="Sem 1">Sem-1</td>
                <td><input type="radio" name="sem" value="Sem 2">Sem-2</td>
                <td><input type="radio" name="sem" value="Sem 3">Sem-3</td>
                <td><input type="radio" name="sem" value="Sem 4">Sem-4</td>
            </tr>
            <tr><td>Subject</td>
                <td><input type="checkbox" name="sub[]" value="CN">CN</td>
                <td><input type="checkbox" name="sub[]" value="AWD">AWD</td>
                <td><input type="checkbox" name="sub[]" value="Python">Python</td>
                <td><input type="checkbox" name="sub[]" value=".Net">.Net</td>
            </tr>
            <tr><td colspan="5" align="center"><input type="submit" name="sb" value="show"></td></tr>
            </table>
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