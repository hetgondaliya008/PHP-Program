<?php
$a=array("name"=>"atmiya","contact"=>1234,"city"=>"rajkot");
$b["marks"]=200;
$b["result"]="pass";
$b["grade"]="A";
$c=array(20,"game"=>"cricket",10.5);
foreach($a as $x)
{
echo"$x<br>";
}
foreach($b as $k=>$x)
{
echo"b[$k]=$x<br>";
}
print_r($c);
?>