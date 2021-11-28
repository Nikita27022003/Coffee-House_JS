<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Админка</title>
</head>
<body>
    <?php
        $is_update = false;
        if (isset($_POST['id']) && $_POST['action'] === 'Удалить') {
            header('location: delete.php');
            exit();
        }

        
        if (isset($_POST['id']) && $_POST['action'] === 'Обновить') {
            $is_update = true;
        }
    ?>
    <?php include 'connection.php' ?>
    <?php include 'admin_header.php' ?>

    <main class="admin-main">
        <section class="form-container">
            <?php

            if ($is_update && $result = mysqli_query($mysqli, "SELECT id, title, price, img_url FROM pleasure WHERE id = {$_POST['id']}" )) {
                $data = mysqli_fetch_assoc($result);
                echo <<<END
                    <form action="update.php" method="POST" class="admin-form">
                        <label>
                            <input class="hidden" type="text" name="id" minlength="1" value="{$data['id']}" required>
                        </label> 
                        <label>
                            Title
                            <input type="text" name="title" min="1" value="{$data['title']}" required>
                        </label>
                        <label>
                            Cost
                            <input type="number" name="price" min="1"  value="{$data['price']}" required>
                        </label>
                        <label>
                            URL
                            <input type="text" name="img_url" min="1"  value="{$data['img_url']}" required>
                        </label>
                        <input type="submit" name="action" value="Update">
                    </form>
                END; 
            } else {
                echo <<<END
                    <form action="create.php" method="POST" class="admin-form">
                        <label>
                            Title
                            <input type="text" name="title" min="1">
                        </label>
                        <label>
                            Cost
                            <input type="number" name="price" min="1">
                        </label>
                        <label>
                            URL
                            <input type="text" name="img_url" min="1">
                        </label>
                        <input type="submit" name="action" value="Create">
                    </form>
                END;
            }
            ?>
        </section>
        <section class="item-list">
        <?php
            if ($result = mysqli_query($mysqli, "SELECT * FROM pleasure")) {
                while( $row = $result->fetch_array() )
                {
                    echo  <<<END
                        <div class="card">
                            <h3 class="title">{$row['title']}</h3>
                            <img class="photo" src="{$row['img_url']}">
                            <p class="cost">\${$row['price']}</p>
                            <div class="buttons">
                            <form action="delete.php" method="POST">
                                <input class="hidden" type="text" name="id" value={$row['id']}>
                                <button type="submit" name="action" value="Удалить" class="delete">Delete</button>       
                            </form> 
                            <form action="admin.php" method="POST">
                                <input class="hidden" type="text" name="id" value={$row['id']}>
                                <button type="submit" name="action" value="Обновить" class="update">Update</button>
                            </form>
                            </div>
                        </div>    
                    END;
                }
            }
        ?>
        </section>
    </main>
</body>
</html>