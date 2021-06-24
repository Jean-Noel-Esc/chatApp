<?php

    $conn = mysqli_connect("localhost", "root", "", "chatapp");
    if($conn){
        echo "DATABASE CONNECTed" . mysqli_connect_error();
    }


?>