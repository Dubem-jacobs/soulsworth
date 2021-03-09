<?php
    $conn = mysqli_connect('localhost', 'root', '', 'soulsworth');

    if(mysqli_connect_errno()){
        //connection failed
        echo 'Failed to connect to MySQL' . mysqli_connect_errno();
    }
?>