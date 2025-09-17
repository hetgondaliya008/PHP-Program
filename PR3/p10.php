<html>
    <head>
        <style>
            .cl{ color:red }
        </style>
    </head>
    <body>
        <?php
            $n1=$a1=$b1=$m1= " ";
            if(isset($_POST["sb"]))
            {
                $x=$_POST["uname"];
                $y=$_POST["pass"];

                if(is_numeric($x))
                    $n1="Username cannot be numeric";
                else
                    $a1="Username is : $x";

                if(strlen($y)!=10)
                    $m1="Password must be of 10 digits";
                else
                    $b1="password is: $y";
            }
        ?>

        <form method="post">
            Username:
            <input type="text" name="uname" required>
            <span class="cl">* 
                <?php if(isset($n1)) echo $n1; ?> 
            </span> <br><br>
            Password: 
            <input type="password" name="pass" required>
            <span class="cl">* 
                <?php if(isset($m1)) echo $m1; ?> 
            </span> <br>
            <input type="submit" name="sb" value="Login">
        </form>

        <?php
            echo "$a1 <br> $b1";
        ?>
    </body>
</html>