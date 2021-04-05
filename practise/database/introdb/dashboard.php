<?php
    session_start();
    if(!isset($_SESSION["loggedin"])){//To ACCESS THE DASHBOARD ONLY IF USER IS LOGGEDIN
        header("Location:login.php");//To ACCESS THE DASHBOARD ONLY IF USER IS LOGGEDIN
    }
    //RETRIEVE DATA
    //$server="localhost";
    //$user="root";
    //$password="";
    //$db="practise";
    require_once "db_config.php";
    //$conn = mysqli_connect($server,$user,$password,$db);
    $query = "SELECT * from users";
    //$result = mysqli_query($conn,$query);
    $result = get($query);
?>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
        </tr>
<?php
    
    //var_dump($result);

    //FUNCTION FOR RETRIEVING RESULT SET
    //$var = mysqli_fetch_assoc($result);
    //var_dump($var);

    //while($row=mysqli_fetch_assoc($result)){
        echo $_SESSION["loggedin"];<br>//SESSION TO SHOW USERNAME
        foreach($result as $row){
        echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["username"]."</td>";
            echo "<td>".$row["type"]."</td>";
        echo "</tr>";
    }
?>
    </table>