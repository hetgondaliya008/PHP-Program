<?php
    $a=10;
    $b=10.5;
    $c="Atmiya";
    $d=true;
    echo " Datatype of a:".gettype($a);
    echo " <br> Datatype of b:".gettype($b);
    echo " <br> Datatype of c:".gettype($c);
    echo " <br> Datatype of d:".gettype($d);

    settype($a,"String");
    echo " <br> New Datatype of a:".gettype($a);
    echo "<br> $a";
?>
