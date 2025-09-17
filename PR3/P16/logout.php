<?php 
    header("Cache-Control:no-store,no-cache,must-revalidate");
    session_start();
    if(! isset($_SESSION["uname"]))
        header("Location:login.php");
    else
    {
        if(session_destroy())
            header("Location:login.php");
    }
?>