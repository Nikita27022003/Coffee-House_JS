<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Корзина</title>
</head>
<body>
    <?php include 'connection.php'?>
    <?php include 'header.php'?>

    <?php
        if ($result = mysqli_query(
            $mysqli, 
            "SELECT SUM(price) as price FROM pleasure " .
            "JOIN basket ON pleasure.id = basket.item_id " .
            "WHERE basket.username = '{$_SESSION['username']}'"
        )) {
            $price = mysqli_fetch_assoc($result)['price'];
            if (!$price) $price = 0;
            echo "<h2  id='basket' class='total'>Total : $price $</h2>";
        }

        if ($result = mysqli_query(
            $mysqli, 
            "SELECT pleasure.title, pleasure.img_url, pleasure.id, pleasure.price FROM pleasure " .
            "JOIN basket ON pleasure.id = basket.item_id " .
            "WHERE basket.username = '{$_SESSION['username']}'"
        )) {
            echo '<div class="basket-container">';
            while( $row = $result->fetch_array() )
            {
                echo  <<<END
                     <div class="cart_of_coffee">
                         <img src="{$row['img_url']}" alt="coffee" class="coffee_picture">
                         <form action="remove.php" method="POST">
                        <div class="coffee_name">{$row['title']}</div>
                    <div class="price">{$row['price']} $</div>
                    <input class="hidden" type="text" name="id" value={$row['id']}>
                     <button class="add_cart" class="add" type="submit" value="Удалить из корзины">Remove</button>
                    </form>
                    </div>
                END;
            }
            echo '</div>';
        }
    ?>
    <footer>
                <div class="container">
                    <img src="./src/img/main_page/footer_beans.png" alt="" class="beans_light_footer">
                    <ul class="menu_footer">
                        <li class="menu_item"><a href="./index.php" class="menu_link">Coffee house</a></li>
                        <li class="menu_item"><a href="./our_coffee.php" class="menu_link">Our coffee</a></li>
                        <li class="menu_item"><a href="./for_your_pleasure.php" class="menu_link">For your pleasure</a></li>
                        <li class="menu_item"><a href="./contact_us.php" class="menu_link">Contact us</a></li>
                    </ul>
                    <div class="footer_beans">
                        <span> <img src="./src/img/main_page/beans dark.png" alt="Beans Dark" class="beans_dark"></span>
                    </div>
                </div>
    </footer>
</body>
</html>