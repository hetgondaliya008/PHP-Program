<?php
    $c = mysqli_connect("localhost","root","");
    if($c)
    {
        mysqli_select_db($c,"employee2");
        $a="update edata set mobile='1111' where ename='Ram'";
        if(mysqli_query($c,$a))
            echo "Record is Updated";
        else
            echo mysqli_error($c);
    }
?>