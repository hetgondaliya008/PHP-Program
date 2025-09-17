<?php
    $n1=1;
    $n2=1;
    echo "$n1 $n2";
    $x=0;
    while ($x<=8)
    {
        $n3 = $n1 + $n2;
        echo " $n3 ";
        $n1=$n2;
        $n2=$n3;
        $x=$x+1;
    }
?>