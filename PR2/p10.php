<?php
    function add()
    {
        $sum = 0;
        $x=func_get_args();
        foreach ($x as $i)
        {
            $sum = $sum + $i;
        }
        return $sum;
    }
    echo "Add :".add(20,30,70.50);
    echo "<br> Add :".add(50, 80.50);
?>