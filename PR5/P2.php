<?php
    $c = mysqli_connect("localhost","root","");
    if($c)
    {
        mysqli_select_db($c,"employee2");
        $a="Create table edata(ename varchar(20), mobile bigint(12))";
        if(mysqli_query($c,$a))
            echo "Table is created successfully";
        else
            echo mysqli_error($c);
    }
?>