<?php
    function display()
    {
        echo "Number of arguments :".func_num_args();
        $x = func_get_args();
        foreach ($x as $i)
        {
            echo "<br> $i";
        }
    }
    display (2,3.5,"Hi");
    display (true,"Byyy");
?>