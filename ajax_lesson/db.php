<?php
global $conn;
function connect_db(){
    global $conn;
    if (!$conn){
        $conn = mysqli_connect("localhost","root","","ajaxlesson");
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL".mysqli_connect_error();
        }else{
            echo "connected";
            mysqli_set_charset($conn,'utf-8');
        }
    }

}

?>