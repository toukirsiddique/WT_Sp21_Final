<?php
    session_start();
    if(!isset($_COOKIE["user"])){
        header("Location: session.php");
    }
?>
<html>
    <body>
        <h1>Completed<?php echo $_COOKIE["user"];?></h1>
    </body>
</html> 