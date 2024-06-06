<!-- DO NOT INSERT/ADD THIS LATER TO THE MAIN FILE-->

<?php
    $servername = "localhost"; //IP ADDRESS sa server
    $username = "root";
    $password = "";
    $dbname = "changs_gadgets";

    //establish connection to database
    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Opps! an error occured : ".$conn->connect_error);
    }
?>