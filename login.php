<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="css/style_login.css">
    </head>
    <body>
        <h2>Login</h2>
        <form action="process/p_login.php" method="POST">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Input Email" required>

            <label for="">Password</label>
            <input type="password" name="password" placeholder="Input Passoword" required>

            <input type="submit" name="submit" value="Login">
            <i><a href="">Register</a></i>
        </form>
        <?php if(isset($_GET['eror'])): ?>
            <b style="color: red;">Username or Password is incorrect</b>
        <?php endif; ?>
    </body>
</html>