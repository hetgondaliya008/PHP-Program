<?php
    function add ($a, $b=70)
    {
        return ($a+$b);
    }
    $d = add (30,70);
    echo "Add :$d <br>";
    $d = add (30);
    echo "Add :$d";
?>