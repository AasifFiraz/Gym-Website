<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href=".\Styles\home_style.css">
</head>

<body>
    <nav>
        <img src="styles/logo.png" class="logo">
        <ul class=nav-links>
            <li><a href="home.php">Home</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="packages.php">Packages</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="#">Conact Us</a></li>

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
    <img src="./Styles/Image-slideshow/image-6.png" style="width: 100%;  ">
    <div class="content">
        <h1>Contact Us</h1>
        <h1 class="Quote">"Need some assistance ?"</h1>
    </div>
    <section>
        <div class="wave">
        </div>
    </section>
    <br><br><br><br><br>
    <section class="contact-details">
        <div class="contact-heading">
            <h1>Contact Us</h1>
        </div>
        <div class="contact-content">
            <p>A GYM WITH WELL-EQUIPPED SPORTS AND FITNESS CLUBS ACROSS COLOMBO, IS COMMITTED TO PROVIDE QUALITY SPORTS FACILITIES AND PERSONALIZED FITNESS PROGRAMS. THE BEST GYM EQUIPMENT SUPPLIER AND PACKAGES OVER THE YEARS WITH HIGHEST STANDARD OF PROFESSIONAL SERVICE.</p><br><br>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-box">
                    <div class="icon"> <i class="bi bi-phone"></i>
                    </div>
                    <div class="contact-text">
                        <h3 style="font-size: 25px; color: #6c5ce7; position: relative; margin-left: 10px;">Phone</h3>
                        <p style="position: relative; margin-left: -5em;"><br>+94-77-555-0149</p>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="icon"> <i class="bi bi-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h3 style="font-size: 25px; color: #6c5ce7; position: relative; margin-left: 7px;">Email</h3>
                        <p style="position: relative; margin-left: -4.3em;"><br>rathnayakagym@gmail.com</p>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="icon"> <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3 style="font-size: 25px; color: #6c5ce7; position: relative; margin-left: 7px;">Address</h3>
                        <p style="position: relative; margin-left: -6.5em;"><br>8124 Ocean Ave Road,<br>Forest Hills,<br>84067</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form name="myForm" action="#" onsubmit="fireSweetAlert();return false">
                    <h2 style="font-size: 30px; position: absolute;">Send Message</h2> <i class="bi bi-chat-left-dots" style="position: relative; left: 15rem; font-size: 25px;"></i>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="fullname" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" style="color: black;">Full Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" style="color: black;">Email</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;"></textarea>
                        <label for="floatingTextarea2" style="color: black;">Type your Message..</label>
                    </div>
                    <button type="submit" class="contact-submit">Send Message</button>
                </form>
            </div>
        </div>
        </div>
    </section>
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="packages.php">Packages</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="#">Contact Us</a></li>
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

    <script type="text/javascript">
        function fireSweetAlert() {
            let fullname = document.forms["myForm"]["fullname"].value;
            let email = document.forms["myForm"]["email"].value;
            let message = document.forms["myForm"]["message"].value;
            if (fullname == "") {
                Swal.fire(
                    '',
                    'Enter your Name !',
                    'error'
                )
            } else if (email == "") {
                Swal.fire(
                    '',
                    'Enter your Email!',
                    'error'
                )
            } else if (message == "") {
                Swal.fire(
                    '',
                    'Write your Message!',
                    'error'
                )
            } else {
                Swal.fire(
                    '',
                    'Your Message has been sent Successfully!',
                    'success'
                )
            }

        }
    </script>
</body>

</html>