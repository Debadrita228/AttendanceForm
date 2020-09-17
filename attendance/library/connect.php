<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "hrm";
    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(! $con)
    {
        die("Connection Timed Out: ".mysqli_connect_error());
    }
?>