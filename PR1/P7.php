<?php
function getvalue()
{
	static $x=0;
	$x=$x+5;
	echo"x=$x<br>";
}
getvalue(); 
getvalue(); 
getvalue();
?>
