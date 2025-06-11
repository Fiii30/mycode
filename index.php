<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="css/style_index.css">
    </head>
    <body>
        <nav>

            <p>WWW</p>
            <ul>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Galery</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Project</a></li>
            </ul>
            <?php if(isset(($_SESSION['level'])) and $_SESSION['level'] == 'admin'):?>
                <div class="dropdown">
                    <div class="dropdown-menu">
                        <b><a href="login.php">Beralih Akun</a></b>
                        <b><a href="register.php">Daftarkan Akun</a></b>
                        <b><a href="process/p_logout.php">Logout</a></b>
                    </div>
                </div>
            <?php elseif(isset(($_SESSION['level'])) and $_SESSION['level'] == 'user') : ?>
                <b><a href="process/p_logout.php">Logout</a></b>
            <?php else: ?>
                    <b><a href="login.php">SIGN IN</a></b>
            <?php endif; ?>
            
        </nav>
        
        <div class="thumbnails">
            <img src="pictures/notfound_icon.png" alt="">
        </div>

        <div class="parent">
            <div class="container">
                <b>Highlight Project</b>
                <img src="pictures/notfound_icon.png" alt="">
                <p?>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis reprehenderit elige</p>
            </div>

            <div class="container">
                <b>Highlight ...</b>
                <img src="pictures/notfound_icon.png" alt="">
                <p?>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis reprehenderit elige</p>
            </div>

            <div class="container">
                <b>Highlight ...</b>
                <img src="pictures/notfound_icon.png" alt="">
                <p?>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis reprehenderit elige</p>
            </div>

            <div class="container">
                <b>Highlight Project</b>
                <img src="pictures/notfound_icon.png" alt="">
                <p?>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis reprehenderit elige</p>
            </div>

            <div class="container">
                <b>Highlight ...</b>
                <img src="pictures/notfound_icon.png" alt="">
                <p?>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis reprehenderit elige</p>
            </div>

            <div class="container">
                <b>Highlight ...</b>
                <img src="pictures/notfound_icon.png" alt="">
                <p?>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis reprehenderit elige</p>
            </div>
        </div>
    </body>
</html>