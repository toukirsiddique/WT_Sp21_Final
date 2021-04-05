<?php
    //DATABASECONNECTION
    $server="localhost";
    $user="root";
    $password="";
    $db="practise";

    $conn = mysqli_connect($server,$user,$password,$db);
    if($conn){
        echo "connected";
    }
    else{
        echo mysqli_connect_error();
    }
    //VALUE INSERTION BY QUERY
    $query = "insert into users values ('NULL','sabbir','12','admin')";
    if(mysqli_query($conn,$query)){
        echo "Values inserted";
    }
    else{
        echo "There was a problem";
    }
    

?>