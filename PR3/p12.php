<html>
    <body>
        <form>
            Name: <input type="text" name="nm">
            <br><br>
            Mark-1 : <input type="text" name="m1">
            <br><br>
            Mark-2 : <input type="text" name="m2">
            <br><br>
            Mark-3 : <input type="text" name="m3">
            <br><br>
            Mark-4 : <input type="text" name="m4">
            <br><br>
            <input type="submit" name="sb" value="Result">
        </form>
        <?php
            if(isset($_GET["sb"]))
            {
                $m1=$_GET["m1"];
                $m2=$_GET["m2"];
                $m3=$_GET["m3"];
                $m4=$_GET["m4"];
                $t=$m1+$m2+$m3+$m4;
                $per=($t*100)/400;
                if($m1>=35 && $m2>=35 && $m3>=35 && $m4>=35)
                    $res="Pass";
                else
                    $res="Fail";
                if($per>=70)
                    $cl="Distinction";
                elseif($per<70 && $per>=60)
                    $cl="First";
                elseif($per<60 && $per>=50)
                    $cl="Second";
                else
                    $cl="Pass";
                $nm=$_GET["nm"];
                echo "<table border='1'>";
                echo "<tr><td colspan='2' style='text-align:center'>Result</td></tr>";
                echo "<tr><td>Name</td><td>$nm</td></tr>";
                echo "<tr><td>Marks</td><td>$m1, $m2, $m3, $m4</td></tr>";
                echo "<tr><td>Total Marks</td><td>$t</td></tr>";
                echo "<tr><td>Percentage</td><td>$per</td></tr>";
                echo "<tr><td>Result</td><td>$res</td></tr>";
                if($res=="Pass")
                    echo "<tr><td>Class</td><td>$cl</td></tr>";
                else
                    echo "<tr><td>Class </td><td>  </td></tr>";
                echo "</table>";
            }
        ?>
    </body>
</html>