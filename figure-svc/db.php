<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "user";
    

    $conn = new mysqli($servername,$username,$password,$databaseName);

    if (!$conn) {
        echo "<script language='javascript'> alert('ket noi that bai')</script>";
    }

?>