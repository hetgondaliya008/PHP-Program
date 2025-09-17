<?php
    $x=10;
    $y=20;
    function getvalue()
    {
        $GLOBALS['x']=$GLOBALS['x']+5;
        $GLOBALS['y']=$GLOBALS['y']+5;
    }
    getvalue();
    echo "x=$x <br> y=$y";
?>