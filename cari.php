<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cari</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="get">
            <input type="text" name="kata">
            <input type="submit" value="Submit">
            <?php
                if(isset($_GET['kata'])) {
                    echo "Anda sedang mencari kata <b>$_GET[kata]</b>";
                }
            ?>
            <a href="login.php">login</a>
        </form>
    </body>
</html>