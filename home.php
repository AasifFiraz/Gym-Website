<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" type="text/css" href=".\Styles\home_style.css">
</head>

<body>
    <nav>
        <img src="styles/logo.png" class="logo">
        <ul class=nav-links>
            <li><a href="#">Home</a></li>
            <li><a href="about_us.php">About Us</a></li>
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
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="slide-button" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="slide-button" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="slide-button" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./Styles/Image-slideshow/image-1.png" class="d-block w-100">
                </div>
                <div class="carousel-item ">
                    <img src="./Styles/Image-slideshow/image-2.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="./Styles/Image-slideshow/image-3.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="./Styles/Image-slideshow/image-4.png" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
        <div class="content">
            <?php
            if (isset($_SESSION['username'])) {

                echo "<h1 class='welcome'> Welcome " . $_SESSION['username'] . "</h1>";
            } ?>
            <h1>Rathnayaka GYM</h1>
            <h1 class="Quote">"Hustle For That Muscle"</h1>
        </div>
        <section>
            <div class="wave">
            </div>
        </section>
        </br></br></br>
        <!----Review Heading--->
        <section id="reviews">
            <!----Review Heading--->
            <div class="review-heading">
                <h1>Reviews</h1>
            </div>
            </br>
            <!----Review Boxes--->
            <div class="review-box-container">
                <!----Box-1--->
                <div class="review-box">
                    <!----box-heading--->
                    <div class="box-heading">
                        <!----Profile--->
                        <div class="profile">
                            <!----Profile-pic--->
                            <div class="profile-img">
                                <img src="./Styles/Review-profile/img1.jpg">
                            </div>
                            <!----client-name--->
                            <div class="client-name">
                                <strong>Zackary Horn</strong>
                            </div>
                            <!----Reviews-stars--->
                            <div class="reviews-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                    </div>
                    <!----Reviews--->
                    <div class="client-reviews">
                        <p>Probably one of the best Gyms around srilanka, They have almost all the equipments and also the packages they offer is worth the price. Good staff, great personal trainers! You got all the stuff you need. Just an awesome gym in many different ways! :) </p>
                    </div>
                </div>
                <!----Box-2--->
                <div class="review-box">
                    <!----box-heading--->
                    <div class="box-heading">
                        <!----Profile--->
                        <div class="profile">
                            <!----Profile-pic--->
                            <div class="profile-img">
                                <img src="./Styles/Review-profile/img2.jpg">
                            </div>
                            <!----client-name--->
                            <div class="client-name">
                                <strong>Arthur Shelby</strong>
                            </div>
                            <!----Reviews-stars--->
                            <div class="reviews-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <!----Reviews--->
                    <div class="client-reviews">
                        <p>This gym is amazing. Amazing facility, top equipment and great environment. Good service with friendly staff and super clean and comfortable gym for everyone from beginners to professional athletes to train at. I would definitely recommend this place</p>
                    </div>
                </div>
                <!----Box-3--->
                <div class="review-box">
                    <!----box-heading--->
                    <div class="box-heading">
                        <!----Profile--->
                        <div class="profile">
                            <!----Profile-pic--->
                            <div class="profile-img">
                                <img src="./Styles/Review-profile/img3.jpg">
                            </div>
                            <!----client-name--->
                            <div class="client-name">
                                <strong>Tiffany Barron</strong>
                            </div>
                            <!----Reviews-stars--->
                            <div class="reviews-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <!----Reviews--->
                    <div class="client-reviews">
                        <p>AMAZING GYM, AMAZING WORKOUTS! The staff here is incredibly friendly and extremely qualified! They know how to push you to the limit in the best way possible with your workouts. You will not leave disappointed! Such a family vibe as soon as you walk in the doors – I highly recommend checking this gym out..</p>
                    </div>
                </div>
                <!----Box-4--->
                <div class="review-box">
                    <!----box-heading--->
                    <div class="box-heading">
                        <!----Profile--->
                        <div class="profile">
                            <!----Profile-pic--->
                            <div class="profile-img">
                                <img src="./Styles/Review-profile/img4.jpg">
                            </div>
                            <!----client-name--->
                            <div class="client-name">
                                <strong>Baile Richard</strong>
                            </div>
                            <!----Reviews-stars--->
                            <div class="reviews-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                        </div>
                    </div>
                    <!----Reviews--->
                    <div class="client-reviews">
                        <p>Good mix of functional fitness with traditional gym equipment. Lots of space for Olympic lifting too. Unless you’re here in the early morning or the evening, there are never too many people which is nice. There are classes offered in the morning, at noon and in the evening – good, varied range of different options.</p>
                    </div>
                </div>
            </div>
        </section>
        </br></br></br>
        <hr style="height:2px;border-width:0; width:101%; color:gray;background-color:black">
        </br></br></br>
        <!-- BMI Heading -->
        <div class="bmi-heading">
            <h1>BMI Calculator</h1>
        </div>
        </br></br>
        <!--BMI Calculator-->
        <div class="bmi-container">
            <div class="bmi-input-group">
                <input type="text" class="bmi-text-fields" placeholder="Age" required></br></br>
                <input type="text" class="bmi-text-fields" id="height" placeholder="Height (cm)" required></br></br>
                <input type="text" class="bmi-text-fields" id="weight" placeholder="Weight (kg)" required></br></br>
                <select class="usertype" name="usertype">
                    <option selected>Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                </select></br></br>
                <button type="submit" class="calculate-btn" id="calculate">Calculate</button></br>
                <div id="bmi-output"><span></span></div>
            </div>
            <div class="bmi-info">
                <table class="table table-dark table-sm">
                    <thead>
                        <tr>
                            <th scope="col">BMI</th>
                            <th scope="col">Weight Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Below 18.5</td>
                            <td>Underweight</td>
                        </tr>
                        <tr>
                            <td>18.5 - 24.9</td>
                            <td>Healthy</td>
                        </tr>
                        <tr>
                            <td>25.0 - 29.9</td>
                            <td>Overweight</td>
                        </tr>
                        <tr>
                            <td>30.0 - and Above</td>
                            <td>Obese</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="wrapper" style="background: black; height: 15rem; position: relative;">
            <h1 class="news-heading">Subscribe to our Newsletter</h1>
            <h3>Want the latest and greatest news from our website straight to</br> your inbox? Chuck us your details and get a sweet weekly email.</h3>
            <button type="button" class="btn btn-outline-light" style="border-radius: 5px;" data-bs-toggle="modal" data-bs-target="#subscribe">Subscribe</button>
        </div>
        <!-- Newsletter-Modal -->
        <div class="modal fade" id="subscribe" tabindex="-1" aria-labelledby="subscribe" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header" style="background: black; color: white; border: none;">
                        <i class="bi bi-envelope-open" style="position: absolute;left: 20%;  font-size: 25px; "></i>
                        <h1 class="modal-title" id="subscribe" style="left: 30%; position: absolute; font-size: 30px;">Subscribe Now</h1><br>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color: white; border-radius: 10px;" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background: rgb(219,227,25); background: linear-gradient(90deg, rgba(219,227,25,1) 0%, rgba(0,212,255,1) 100%);">

                        <h1 style="font-size: 18px; position: absolute; left: 20%; color: grey; font-family: 'Atkinson Hyperlegible', sans-serif;"> Get notified about the next update.</h1>
                        <br><br>
                        <label for="name" style="position: relative; left: 20%;">Nameㅤ</label>
                        <input type="text" placeholder="Name" style="position: relative; left: 20%;" required><br><br>
                        <label for="name" style="position: relative; left: 20%;">Emailㅤ </label>
                        <input type="text" placeholder="Email" style="position: relative; left: 21%;" required>
                        <br>
                    </div>
                    <div class="modal-footer" style=" border: none; background: rgb(219,227,25); background: linear-gradient(90deg, rgba(219,227,25,1) 0%, rgba(0,212,255,1) 100%);">

                        <button type="button" class="btn btn-outline-dark" style="position: relative; right: 45%;">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        </br></br></br><br>

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
                            <li><a href="#">Home</a></li>
                            <li><a href="about_us.php">About Us</a></li>
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
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript">
            const height = document.querySelector("#height");
            const weight = document.querySelector("#weight");
            const calculate = document.querySelector("#calculate");
            const yourBMI = document.querySelector("#bmi-output");

            calculate.addEventListener("click", () => {

                if (height.value != "" && weight.value != "") {
                    let bmiValue = weight.value / (height.value * height.value) * 10000;
                    yourBMI.innerHTML = `Your BMI - <span> ${bmiValue.toFixed(1)} </span>`
                } else {
                    yourBMI.innerHTML = `Please Enter Accurate Value`;
                }
            });

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