<?php
    $uname="";
    $pass="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];
        $server="localhost";
        $user="root";
        $password="";
        $db="practise";

        $conn = mysqli_connect($server,$user,$password,$db);
        $query = "insert into users values (NULL,'$uname','$pass','user')";
        if(mysqli_query($conn,$query)){
            echo "Value inserted";
        }
        else{
            echo "Not inserted";
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