<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="./src/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./src/css/bootstrap-grid.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body>
    <header class="contact_us">
        <div class="container">
            <div class="header_menu">
            <img src="./src/img/main_page/coffee-beans.png" alt="" class="beans_light">
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
        <!-- Menu Burger -->
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>
            <ul class="menu__box">
                <li class="menu_item"><a href="./index.php" class="menu_link">Coffee house</a></li>
                <li class="menu_item"><a href="./our_coffee.php" class="menu_link">Our coffee</a></li>
                <li class="menu_item"><a href="./for_your_pleasure.php" class="menu_link">For your pleasure</a></li>
                <li class="menu_item"><a href="./contact_us.php" class="menu_link">Contact us</a></li>
            </ul>
          </div>
        <div class="subheader">
            <div class="pleasure_topic">Contact us</div>
        </div>
    </div>
</header>
<div class="your_taste">
    <div class="container">
        <p class="tell_section" id="another">Tell us about your tastes</p>
        <div class="footer_beans">
            <span> <img src="./src/img/main_page/beans dark.png" alt="Beans Dark" class="beans_dark"></span>

         </div>
    </div>
</div>

<section class="section-form">
    <div class="row">
        <?php include 'connection.php' ?>
        <?php 
        echo <<<END
        <form action="user_form.php" method="POST" class="contact-form">
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="name">Name</label>
                </div>
                <div class="col span-1-of-3">
                    <input type="text" name="person_name" id="name" placeholder="Your name" required>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="email">Email</label>
                </div>
                <div class="col span-1-of-3">
                    <input type="email" name="email" id="email" placeholder="Your email"required>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="phone">Phone</label>
                </div>
                <div class="col span-1-of-3">
                    <input type="text" name="phone" id="phone" placeholder="+7(___) ___-____" required>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="person_message">Your message*</label>
                </div>
                <div class="col span-1-of-3">
                    <input type="text" name="person_message" placeholder="Tell us"required>
                </div>
            </div>
                <button name="action" class="send_us" value="Send us" type="submit">Send us</button>
        </form>
        END;
        ?>
    </div>
</section>
    <!--  -->
    <!--  -->
     <!----------->
    <!-- Footer -->
    <footer>
        <div class="container">
            <!-- <img src="./src/img/main_page/footer_beans.png" alt="" class="beans_light_footer"> -->
            <ul class="menu_footer">
                <li class="menu_item"><a href="./index.php" class="menu_link">Coffee house</a></li>
                <li class="menu_item"><a href="./our_coffee.php" class="menu_link">Our coffee</a></li>
                <li class="menu_item"><a href="./for_your_pleasure.php" class="menu_link">For your pleasure</a></li>
                <li class="menu_item"><a href="./contact_us.php" class="menu_link">Contact us</a></li>
                <li class="menu_item"><a href="./basket.php" class="menu_link">Basket</a></li>
            </ul>
            <div class="footer_beans">
                <span> <img src="./src/img/main_page/beans dark.png" alt="Beans Dark" class="beans_dark"></span>
 
             </div>
        </div>
    </footer>
    <!-- <script src="./src/js/form.js"></script> -->
</body>
</html>