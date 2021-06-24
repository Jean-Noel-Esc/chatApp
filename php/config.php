<?php

    $conn = mysqli_connect("localhost", "root", "", "chat");
    if($conn){
        echo "DATABASE CONNECT" . mysqli_connect_error();
    }


?>