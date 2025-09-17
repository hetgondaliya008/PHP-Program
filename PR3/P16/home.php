<?php 
    header("Cache-Control:no-store,no-cache,must-revalidate");
    session_start();
    if(! isset($_SESSION["uname"]))
        header("Location:login.php");
    else
    {
        echo "welcome:".$_SESSION["uname"];
        echo "<a href='home1.php'>Go to next page </a>";
    }
?>