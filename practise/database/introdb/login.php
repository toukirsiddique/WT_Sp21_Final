<?php
    require_once 'db_config.php';
    $uname="";
    $pass="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $query="select * from users where username='$uname' and password='$pass'";
        $result= get($query);//AS THIS QUERY IS SELECT STATEMENT
        if(count($result)>0){
            $user = $result[0];//keeping the retreived username in an array
            $_SESSION["loggedin"] = $user["username"];//session
            header("Location:dashboard.php");
        }
        else{
            echo "Username or password is invalid";
        }
    }
?>
<html>
    <head></head>
    <body>
        <form method="post">
            <input type="text" name="uname" placeholder="Username"></br>
            <input type="password" name="pass" placeholder="Password"></br>
            <input type="submit" value="register"> 
        </form>
    </body>
</html>