<?php 
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "testdb";

    
    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
    mysqli_query($conn, "SET NAMES 'utf8'"); // 'utf8', not cp1251

    $sql = "SELECT * FROM news;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

?>


 