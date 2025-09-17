<?php
    $c = mysqli_connect("localhost","root","");
    if($c)
    {
        mysqli_select_db($c,"employee2");
        $disp=mysqli_query($c,"select * from edata");
        echo "<table border='1'><tr><td>Employee Name</td><td>Mobile No.</td></tr>";
        while($row=mysqli_fetch_array($disp))
        {
            echo "<tr><td>".$row['ename']."</td>";
            echo "<td>".$row['mobile']."</td></tr>";
        }
        echo "</table>";
    }
?>