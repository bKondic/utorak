<?php 

    $server = "localhost";
    $database = "pzii";
    $username = "root";
    $password = "";

    mysqli_connect($server,$username,$password,$datebase);
    $query = "SELECT * FROM mobiteli";
    $res = mysqli_query($query,$con);
    while($row = mysqli_fetch_array($res)){
        echo $row['naziv'];
    }
    mysqli_close($con);
?>