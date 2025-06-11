<?php
include "../connection/connect_db.php";

if(isset($_POST['submit_loc'])){
    $location = $_POST['location'];
    $check_loc = "SELECT * FROM pictures WHERE location LIKE %$location%";

    $sql_loc = mysqli_query($connect, $check_loc);

}

if(isset($_POST['submit'])){
    $location = $_POST['location'];
    $picture = $_FILES['foto']['name'];
    $temp_picture = $_FILES['foto']['tmp_name'];

    if(!empty($picture)){
        move_uploaded_file($temp_picture, "../pictures/" . $picture);
        $input_pic = "INSERT INTO pictures (name) VALUES ('$picture')";
    }
}
?>