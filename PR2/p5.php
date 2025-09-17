<?php
    $a = array (1,2,3);
    $b = array ('a'=> 4, 'b'=>5);
    $c = $a + $b;
    foreach ( $c as $k => $x)
    {
        echo "c[$k] = $x <br> ";
    }
    $a = array ('a'=> 1, 'b'=>2, 'c'=>3);
    $b = array ('a'=> 1, 'b'=>2, 'c'=>3);
    if ($a == $b)
        echo "Equal";
    else
        echo "Not Equal";

    if ($a === $b)
        echo "<br> Identical";
    else
        echo "<br>Not  Identical";
?>