<?php
    $a="Good friends are the real gift from God. So be and get good friend";
    echo strtoupper($a)."<br>";
    echo ucwords($a)."<br>";
    echo strlen($a)."<br>";
    echo substr($a , 5, 11)."<br>";
    $b = "Hi";
    echo strcmp($a, $b);
    echo substr_count($a,"friend")."<br>";
    echo strpos($a,"GOD");
    echo str_replace("Real", "priceless",$a)."<br>";
    echo strrev($a);
?>