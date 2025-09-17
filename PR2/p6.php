<?php
    $c = array (1,2,3,4);
    echo "Total Element in array:" .count($c);
    echo "<br>";
    array_push($c, "a", "b");
    print_r($c);
    echo "<br>";
    array_push($c);
    print_r($c);
    echo "<br>";
    $a = array (5,6);
    $b = array_merge($c,$a);
    print_r($b);
    echo "<br>";
    asort($b);
    print_r($b);
?>