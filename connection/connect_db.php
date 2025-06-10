<?php

$connect = mysqli_connect("localhost", "root", "", "mylocal");

if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}

?>