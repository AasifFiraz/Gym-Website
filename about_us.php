<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href=".\Styles\home_style.css">
</head>

<body>
    <nav>
        <img src="styles/logo.png" class="logo">
        <ul class=nav-links>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="packages.php">Packages</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contact_us.php">Conact Us</a></li>

        </ul>
        <form action="Login/index.php">
            <?php
            if (!isset($_SESSION['username'])) {
                echo "<input type='submit' value='Login' class='login' >";
            }
            ?>
        </form>
        <form action="logout.php">
            <?php
            if (isset($_SESSION['username'])) {
                echo "<input type='submit' value='Logout' class='logout' >";
            }
            ?>
        </form>
    </nav>
    <img src="./Styles/Image-slideshow/image-5.png" style="width: 100%; ">
    <div class="content">

        <h1>About Us</h1>
        <h1 class="Quote">"All You Need to know about us"</h1>
    </div>
    <section>
        <div class="wave">
        </div>
    </section>
    <br><br><br><br><br><br><br>
    <div class="about-heading">
        <h1>About Us</h1>
    </div>
    <div class="about-us">
        <p>Rathnayaka GYMS is a fitness center, which has been grown rapidly throughout the country. They provide a quality healthcare service and give their members control over their health is paramount at all Rathnayaka GYMS. They help members prevent and overcome degenerative diseases, achieve their optimum fitness goals, realize personal lifestyle development objectives and rehabilitate them into good health. This is accomplished by designing exercise programs that are effective, efficient and motivational. A team of well-trained, committed and passionate professionals is delivering all of these healthcare services, whilst being managed and guided by some of the most qualified and respected experts of the healthcare and fitness industry. They have a strong chain of branches, which located in Kaduwela, Kottawa, Malabe, and Avissawella.</p>
    
    <br><br>
    <h1 style="text-align: center;">Our Vision</h1>
    <p>
    <p>To be one of the leading fitness centeres in srilanka, Having the most effective fitness facilities.</p>
    </p>
    <br><br>
    <h1 style="text-align: center;">Our Mission</h1>
    <p>
    <p>To have island wide ultra-modern Gymnasiums and Fitness Centers to enhance public health & fitness for their quality lifestyles.</p>
    </p>
    </div>
    <br><br><br><br><br><br><br><br>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="row">
                <div class="footer-col" style="margin-left: 40px;">
                    <h4>About Us</h4>
                    <p style="color: #bbbbbb;">Rathnayaka GYMS is a fitness center, which has been grown rapidly throughout the country. They provide a quality healthcare service and give their members control over their health is paramount at all Rathnayaka GYMS. They help members prevent and overcome degenerative diseases, achieve their optimum fitness goals, realize personal lifestyle development objectives and rehabilitate them into good health. This is accomplished by designing exercise programs that are effective, efficient and motivational. A team of well-trained, committed and passionate professionals is delivering all of these healthcare services, whilst being managed and guided by some of the most qualified and respected experts of the healthcare and fitness industry. They have a strong chain of branches, which located in Kaduwela, Kottawa, Malabe, and Avissawella.</p>
                </div>
                <div class="footer-col" style="margin-left: 9em;">
                    <h4 style="margin-left: 29px;">Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="packages.php">Packages</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="Login/index.php">Login</a></li>
                        <li><a href="Login/register.php">Register</a></li>
                    </ul>
                </div>
                <div class="footer-col" style="margin-left: -50px;">
                    <h4>Contact Info</h4>
                    <i class="bi bi-phone" style="position: absolute; margin-top: 25px;  color: white;"></i>
                    <p style="color: #bbbbbb; position: relative; margin-left: 25px;"><br>+94-77-555-0149</p>
                    <i class="bi bi-envelope" style="position: absolute; margin-top: 25px; color: white;"></i>
                    <p style="color: #bbbbbb;  position: relative; margin-left: 25px;"><br>rathnayakagym@gmail.com</p>
                    <i class="bi bi-geo-alt" style="position: absolute; margin-top: 20px; color: white;"></i>
                    <p style="color: #bbbbbb; margin-top: -5px;  position: relative; margin-left: 25px;"><br>8124 Ocean Ave Road,<br>Forest Hills,<br>84067</p>
                    <div class="social-media">
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="..//js/bootstrap.bundle.js"></script>
</body>

</html>