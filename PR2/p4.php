<?php
    $a = array ("First"=>array("Name"=>"Het", "Mo."=>9925, "City"=>"Surat"),
                "Second"=>array("Name"=>"Vandan", "Mo."=>9746, "City"=>"Surat"),
                "Third"=>array("Name"=>"Dhrumil", "Mo."=>9425, "City"=>"Surat"));
    foreach($a as $k=>$x)
    {
        echo $k;
        foreach($x as $k1=>$y)
        {
            echo " [$k1] = $y ";
        }
        echo "<br>";
    }
    print_r($a);
?>