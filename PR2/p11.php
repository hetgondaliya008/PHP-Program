<?php
    $a = 10;
    $b = 20.50;
    echo isset($a)."<br>";
    echo isset($b)."<br>";
    unset($a);
    echo isset($a)."<br>";
    echo gettype($a);
?>