<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About it</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="./src/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./src/css/bootstrap-grid.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
 <header class="pleasure_header">
        <div class="container">
            <div class="header_menu">
            <ul class="menu">
                <li class="menu_item"><a href="./index.php" class="menu_link">Coffee house</a></li>
                <li class="menu_item"><a href="./our_coffee.php" class="menu_link">Our coffee</a></li>
                <li class="menu_item"><a href="./for_your_pleasure.php" class="menu_link">Our goods</a></li>
                <li class="menu_item"><a href="./contact_us.php" class="menu_link">Contact us</a></li>
                <li class="menu_item"><a href="./basket.php" class="menu_link">Basket</a></li>
                  <?php include 'connection.php'?>
                <?php 
                
        if ($_SESSION['username'] === 'admin' && $_SESSION['pass'] === 'admin') {
            echo '<li class="menu_item"><a href="./admin.php" class="menu_link">Admin</a></li>';
        }
    ?>  
                <li class="menu_item"><a href="./logout.php" class="menu_link">Logout</a></li>
                
            </ul>
        </div>
        </div>
            <div class="subheader">
                <div class="pleasure_topic">Admin</div>
            </div>
        </div>
    </header>
</body>
</html>