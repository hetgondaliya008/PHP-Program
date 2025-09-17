<?php
    $x=10;
    $y=20;
    function getvalue()
    {
        global $x,$y;
        $x=$x+5;
        $y=$y+5;
    }
    getvalue();
    echo "x=$x <br> y=$y";
?>