<?php
$con = mysqli_connect("localhost", "root", "", "carrentalp");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>