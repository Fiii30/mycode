<?php
include "../connection/connect_db.php";
include "../process/p_c_admin.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Page</title>
    </head>
    <body>
        <form action="../process/p_c_admin.php" method="POST">
            <b>Search Location of Picture</b>
            <label for="">Location</label>
            <input type="text" name="location" placeholder="Enter the location of the picture">

            <input type="submit" name="submit_loc" value="Search">
        </form>

        <form action="../process/p_c_admin.php" method="POST">
            <b>Update Pictures</b>
            <label for="">Picture</label>
            <input type="file" name="picture">

            <input type="submit" name="submit" value="Update">
        </form>

        <table>
            <tr>
                <th>id</th>
                <th>Name Pictures</th>
                <th>Location</th>
            </tr>

        <?php
        if(isset($sql_loc)):
            if(mysqli_num_rows($sql_loc) > 0):
                while($row = mysqli_fetch_row($sql_loc)): ?>
                    
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['location'] ?></td>
                    </tr>

                <?php endwhile; ?>
            <?php endif; ?>
        <?php endif; ?>

        </table>
    </body>
</html>