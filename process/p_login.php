<?php
include "../connection/connect_db.php";
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "SELECT * FROM users WHERE email = '$email'";

    $sql = mysqli_query($connect, $check);

    if(mysqli_num_rows($sql) == 1){
        $row = mysqli_fetch_assoc($sql);

        if(password_verify($password, $row['password'])){
            $_SESSION['nama'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['level'] = $row['level'];

            header("location: ../index.php");
            exit;
        }else{
            header("location: ../login.php?eror=failedlogin");
            exit;
        }
    }else{
        header("location: ../login.php?eror=failedlogin");
        exit;
    }
}
?>