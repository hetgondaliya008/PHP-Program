<?php
    $c = mysqli_connect("localhost","root","");
    if($c)
    {
        mysqli_select_db($c,"employee2");
        $a="delete from edata where ename='Boss'";
        if(mysqli_query($c,$a))
            echo "Record is Deleted";
        else
            echo mysqli_error($c);
    }
?>