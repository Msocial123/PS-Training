<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
    echo "Connection Completed"
?>
