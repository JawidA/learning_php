<?php 
    $conn = mysqli_connect('localhost', 'jawid', 'test1234', 'jawid');

    if (!$conn){
        echo 'Connection Error '. mysqli_connect_error();
    }
?>