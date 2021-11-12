<?php
session_start();

?>

<?php
if (isset($_POST["Purchase"])) {
    if (isset($_SESSION['username'])) {
        header("Location: payment.php");
    } else {
        echo "<script>alert('Please Login to Purchase the Supplement or Equipment !')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
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
            <li><a href="packages.php">Packages</a></li>
            <li><a href="#">Shop</a></li>
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
        <h1 style="font-size: 50px;">SUPPLEMENTS & EQUIPMENTS</h1>
        <h1 class="Quote">"Looking for high quality equipments at a low cost?"</h1>
    </div>
    <section>
        <div class="wave">
        </div>
    </section>
    <br><br><br><br>
    <div class="about-heading">
        <h1>Food Supplements</h1>
    </div>
    <br><br>
    <div class="pack-main">
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/supp-1.jpg">
            </div>
            <div class="contentBox">
                <h1 style="font-size: 18px;">Impact Whey Protein</h1>
                <h2 class="pack-price">LKR.7200/=</h2>
                <h3>Premium whey packed with 21g of protein per serving, for the everyday protein you need from a quality source. </h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/supp-2.jpg">
            </div>
            <div class="contentBox">
                <h1>MuscleBlaze Fuel</h1>
                <h2 class="pack-price">LKR.93800/=</h2>
                <h3>Pre workout supplement- Caffeine is a great pre workout supplement for men and women as it fills you with energy.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/supp-3.jpg">
            </div>
            <div class="contentBox">
                <h1 style="font-size: 16px;">ActivTotal Mass Gainer (Chocolate flavour)</h1>
                <h2 class="pack-price">LKR.41300/=</h2>
                <h3>15.00 g Protein per serving triggers muscle synthesis by quickly providing amino acids. Enhanced with 3 protein sources</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/supp-4.jpg">
            </div>
            <div class="contentBox">
                <h1 style="font-size: 16px;">WILD BUCK Carbs Loader</h1>
                <h2 class="pack-price">LKR.15300/=</h2>
                <h3>Mass and Weight Gain | Wild Buck Carbs Loader is carbohydrates releasing supplement and provides instant energy to balance the blood glucose levels.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/supp-5.jpg">
            </div>
            <div class="contentBox">
                <h1 style="font-size: 16px;">Protein Hot Chocolate</h1>
                <h2 class="pack-price">LKR.4000/=</h2>
                <h3>With over 70% less sugar and carbs than many standard supermarket alternatives, Have a and warming hot chocolate without derailing your training.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
    </div>
    <br><br>
    <div class="pack-main">
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/supp-6.jpg">
            </div>
            <div class="contentBox">
                <h1 style="font-size: 16px;">Big Muscles Nutrition</h1>
                <h2 class="pack-price">LKR.7800/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/supp-7.jpg">
            </div>
            <div class="contentBox">
                <h1>Wild Hyper Charge</h1>
                <h2 class="pack-price">LKR.80000/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/supp-8.jpg">
            </div>
            <div class="contentBox">
                <h1>optimum nutrition</h1>
                <h2 class="pack-price">LKR.45800/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/supp-9.jpg">
            </div>
            <div class="contentBox">
                <h1>Isopure low carb</h1>
                <h2 class="pack-price">LKR.16000/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/supp-10.jpg">
            </div>
            <div class="contentBox">
                <h1>Nitro Tech</h1>
                <h2 class="pack-price">LKR.10500/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="about-heading">
        <h1>Fitness Equipments</h1>
    </div>
    <br><br>
    <div class="pack-main">
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/eq-1.jpg">
            </div>
            <div class="contentBox">
                <h1>Hex Dumbell 10kg</h1>
                <h2 class="pack-price">LKR.23800/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/eq-2.jpg">
            </div>
            <div class="contentBox">
                <h1>Sparnod fitness bike</h1>
                <h2 class="pack-price">LKR.23800/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/eq-3.jpg">
            </div>
            <div class="contentBox">
                <h1>Healthgenie treadmill</h1>
                <h2 class="pack-price">LKR.23800/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/eq-4.jpg">
            </div>
            <div class="contentBox">
                <h1>Adjustable situp bar</h1>
                <h2 class="pack-price">LKR.23800/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
    </div>
    <br><br>
    <div class="pack-main">
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/eq-5.jpg">
            </div>
            <div class="contentBox">
                <h1>tko fid bench</h1>
                <h2 class="pack-price">LKR.23800/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/eq-6.jpg">
            </div>
            <div class="contentBox">
                <h1>cybex bravo lift</h1>
                <h2 class="pack-price">LKR.23800/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/eq-7.jpg">
            </div>
            <div class="contentBox">
                <h1>stairmaster 10g climber</h1>
                <h2 class="pack-price">LKR.23800/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
                <button type="button" class="pack-purchase" style="border: none;" data-bs-toggle="modal" data-bs-target="#purchase">Purchase</button>
            </div>
        </div>
        <div class="packages">
            <div class="imgBox">
                <img src="./Styles/supp & Equip/eq-8.jpg">
            </div>
            <div class="contentBox">
                <h1>Cyber X r series</h1>
                <h2 class="pack-price">LKR.23800/=</h2>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi corporis, exercitationem voluptatibus tempore voluptate unde.</h3>
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
                        <li><a href="packages.php">Packages</a></li>
                        <li><a href="#">Shop</a></li>
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