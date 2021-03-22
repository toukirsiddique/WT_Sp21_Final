<?php
    $uname="";
    $pass="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        if($uname == "toukir" && $pass == "1234567"){
            setcookie("user",$uname,time()+120,"/");
            header("Location: dashboard.php");
        }
        
    }
?>

<html>
    <head>
    </head>
    <body>
        <form method="post">
            <input type="text" name="uname" placeholder="Username"><br>
            <input type="password" name="pass" placeholder="Password"><br>
            <input type="submit" value="login">
        </form>
            
    </body>
</html>