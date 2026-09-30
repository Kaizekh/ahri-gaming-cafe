<?php 

function connection() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbame = "gaming_cafe";

    $con = new mysqli($host, $user, $pass, $dbame);
    if ($con->connect_error) {
        echo $con->connect_error;
    }else {
        return $con;
    }
}


?>