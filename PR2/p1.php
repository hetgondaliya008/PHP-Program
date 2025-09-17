<?php
$a=array(10,10.5,"atmiya","true");
$b[0]=20;
$b[2]="hello";
$b[5]=3.5;
for($i=0;$i<4;$i++)
{
	echo"a[$i]=".$a[$i]."<br>";
}
foreach($b as $x)
{
	echo"$x<br>";
}
print_r($a);
?>