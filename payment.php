<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/all.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href=".\Styles\home_style.css">
</head>
<body>
<br>
<div class="about-heading">
        <h1>Payment Form</h1>
    </div>
    <div class="payment-row">
        <div class="col-75">
            <div class="container">
                <form id="validation" action="payment_success.html" method="POST">
                    <div class="payment-row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="bi bi-person-fill"></i> Full Name</label>
                            <input type="text" id="fname" name="fullname" required>
                            <label for="email"><i class="bi bi-envelope-fill"></i> Email</label>
                            <input type="text" id="email" name="email" required>
                            <label for="adr"><i class="bi bi-geo-alt-fill"></i> Address</label>
                            <input type="text" id="adr" name="address"  required>
                            <label for="city"><i class="bi bi-bank2"></i> City</label>
                            <input type="text" id="city" name="city" required>

                            <div class="payment-row">
                                <div class="col-50">
                                    <label for="state"> <i class="fas fa-flag-usa"></i> State</label>
                                    <input type="text" id="state" name="state" required>
                                </div>
                                <div class="col-50" style="padding-right: 40px">
                                    <label for="zip">Zip Code</label>
                                    <input type="text" id="zip" name="zip" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-50" style="margin-left: -5px;">
                            <label for="fname" style="font-size: 25px;">Accepted Cards</label>
                            <div class="my-3" style="display: flex; position: relative; margin-left: -40px; margin-right: 80px; justify-content: space-evenly;">
                                <div class="form-check" >
                                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                    
                                    <label class="form-check-label" for="credit" style="font-size: 20px;"> <i class="fab fa-cc-visa" style="color: navy;"></i> Visa</label>
                                </div>
                                <div class="form-check">
                                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="debit" style="font-size: 20px;">  <i class="fab fa-cc-mastercard" style="color: red;"></i> Master</label>
                                </div>
                            </div>

                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname"  required>
                            <label for="ccnum"><i class="far fa-credit-card"></i> Card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="January" required>
                            <div class="payment-row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2021" required>
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="123" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> I Agree with the terms and conditions
                    </label>
                    <input type="submit" value="Confirm Your Purchase" class="payment-btn">
                </form>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script type="text/javascript">
        $('#validation').validate({
            roles: {
                fullname: {
                    required: true,
                },
                email: {
                    required: true,
                },
                address: {
                    required: true,
                },
                city: {
                    required: true,
                },
                state: {
                    required: true,
                },
                zip: {
                    required: true,
                },
                cardname: {
                    required: true,
                },
                cardnumber: {
                    required: true,
                },
                expmonth: {
                    required: true,
                },
                expyear: {
                    required: true,
                },
                cvv: {
                    required: true,
                },

            },
            messages: {
                fullname: "Please enter your full name*",
                email: "Please enter your email*",
                city: "Please enter your city*",
                address: "Please enter your address*",
                state: "Please enter your state*",
                zip: "Please enter your zip*",
                cardname: "Please input your card name*",
                cardnumber: "Please input your card number*",
                expmonth: "Please input the exp month*",
                expyear: "Please input the exp year*",
                cvv: "Please input your cvv*",
            },
        });
    </script>
</body>

</html>