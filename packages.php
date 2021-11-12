<?php
session_start();

?>

<?php
if (isset($_POST["Purchase"])) {
    if (isset($_SESSION['username'])) {
        header("Location: payment.php");
    } else {
        echo "<script>alert('Please Login to Purchase the Package!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href=".\Styles\home_style.css">
</head>

<body>
    <nav>
        <img src="styles/logo.png" class="logo">
        <ul class=nav-links>
            <li><a href="home.php">Home</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="#">Packages</a></li>
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
    <img src="./Styles/Image-slideshow/image-7.png" style="width: 100%;  ">
    <div class="content">
        <h1>Packages</h1>
        <h1 class="Quote">"In a need of a package to start your fitness journey, well ur at the right place"</h1>
    </div>
    <section>
        <div class="wave">
        </div>
    </section>
    <br><br><br><br>
    <div class="about-heading">
        <h1>Fitness Packages</h1>
    </div>
    <br><br>
    <div class="pack-main">
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/package-img-indmale.png">
            </div>
            <div class="contentBox">
                <h1>Individual Male</h1>
                <h2 class="pack-price">LKR.23800/=</h2>
                <h3>Feeling insecure about your body and do you skip beach parties worrying what the girls might think?</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/package-img-indfemale.png">
            </div>
            <div class="contentBox">
                <h1>Individual Female</h1>
                <h2 class="pack-price">LKR.19800/=</h2>
                <h3>Feeling insecure about your body and do you skip beach parties worrying what the girls might think?</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/package-img-student.png">
            </div>
            <div class="contentBox">
                <h1>Student</h1>
                <h2 class="pack-price">LKR.16000/=</h2>
                <h3>Feeling insecure about your body and do you skip beach parties worrying what the girls might think?</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/package-img-family.jpg">
            </div>
            <div class="contentBox">
                <h1>Family</h1>
                <h2 class="pack-price">LKR.39500/=</h2>
                <h3>Feeling insecure about your body and do you skip beach parties worrying what the girls might think?</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/package-img-monthly.jpg">
            </div>
            <div class="contentBox">
                <h1>Monthly</h1>
                <h2 class="pack-price">LKR.6000/=</h2>
                <h3>Feeling insecure about your body and do you skip beach parties worrying what the girls might think?</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="purchase" tabindex="1" aria-labelledby="purchase" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: #bbbbbb;">
                <div class="modal-header" style="border: none;">
                    <h1 class="modal-title" id="purchase" style="left: 25%; top: 40px; position: relative; font-size: 30px; color: black;">Membership Package</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST">
                    <div class="modal-body">
                        <br><br><br>
                        <select class="usertype" name="usertype">
                            <option selected>Individual Male</option>
                            <option>Individual Female</option>
                            <option>Student</option>
                            <option>Family</option>
                            <option>Monthly</option>
                        </select>
                        <br>
                        <div class="inp-group">
                            <input type="text" class="pack-text-fields" placeholder="Your Name" required>
                        </div>
                        <div class="inp-group">
                            <input type="text" class="pack-text-fields" placeholder="Your Phone Number" required>
                        </div>
                        <div class="inp-group">
                            <input type="text" class="pack-text-fields" placeholder="Your Email" required>
                        </div>
                        <div class="inp-group">
                            <div class="pack-textarea">
                                <textarea placeholder="Message" style="height: 100px; border-radius: 20px;" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="border: none;">

                        <button type="submit" name="Purchase" class="btn btn-primary">Purchase</button>

                    </div>
                </form>
            </div>
        </div>
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li><a href="#">Packages</a></li>
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
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>