<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Page</title>
        <link rel="stylesheet" href="css/style_login.css">
    </head>
    <body>
        <div class="container">
            <h2>Register</h2>
            <?php if(isset(($_SESSION['level'])) and $_SESSION['level'] == 'admin'): ?>
                <h6>Role : Admin</h6>
            <?php endif; ?>
            <form action="process/p_register.php" method="POST">
                <label for="">Username</label>
                <input type="text" name="username" placeholder="Create Username" required>

                <label for="">Email</label>
                <input type="email" name="email" placeholder="Input Email" required>

                <label for="">Password</label>
                <input type="password" name="password" placeholder="Create Passoword" required>

                <?php if(isset(($_SESSION['level'])) and $_SESSION['level'] == 'admin'): ?>
                    <label for="">Level</label>
                    <select name="level">
                        <option value="null" disabled selected>Choose an Option</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                <?php else :?>
                    <input type="hidden" name="level" value="user">
                <?php endif; ?>

                <input type="submit" name="submit" value="Register">

                <i><a href="login.php">Login</a></i>
            </form>
        </div>
    </body>
</html>