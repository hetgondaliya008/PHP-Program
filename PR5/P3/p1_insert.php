<?php
    $c = mysqli_connect("localhost","root","");
    if($c)
    {
        mysqli_select_db($c,"employee2");
        $a="insert into edata value('Het',1234)";
        if(mysqli_query($c,$a))
            echo "Record is inserted";
        else
            echo mysqli_error($c);
    }
?>