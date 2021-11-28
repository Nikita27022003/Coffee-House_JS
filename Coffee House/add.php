<?php
    include_once 'connection.php';
    session_start();
    if (isset($_POST['id'])) {
        if (mysqli_query($mysqli, "INSERT INTO basket(username, item_id) VALUES ('{$_SESSION['username']}',{$_POST['id']})")) {
            header('location: for_your_pleasure.php#cards');
        } else {
            die(mysqli_error($mysqli));
            header('location: error.php');
        }
    }
?>