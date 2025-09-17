<?php
    $c = mysqli_connect("localhost","root","");
    if($c)
    {
        $a="Create database employee2";
        if(mysqli_query($c,$a))
            echo "Database is created successfully";
        else
            echo mysqli_error($c);
    }
?>