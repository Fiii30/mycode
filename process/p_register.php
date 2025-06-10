<?php
include "../connection/connect_db.php";

if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(!empty($name) and !empty($email) and !empty($password) and !empty($level)){

        $input = "INSERT INTO users (username, email, password, level) VALUES ('$name', '$email', '$hash', '$level')";

        $sql = mysqli_query($connect, $input);

        if(!$sql){
            echo "Error: ". $sql;
        }else{
            header("location: ../login.php");
            exit;
        }
    }else{
        echo "Please fill in all fields";
    }
}
?>