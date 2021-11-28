<?php
    if (isset($_POST['title']) && isset($_POST['price']) && isset($_POST['img_url'])) {
        include 'connection.php';
        if ($result = mysqli_query($mysqli, "INSERT INTO pleasure(title, price, img_url) VALUES('{$_POST['title']}', {$_POST['price']}, '{$_POST['img_url']}')")) {
            header('location: admin.php');
        } else {
            header('location: error.php');
        }
        exit();
    }
?>