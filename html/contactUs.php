<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Center | Winkelen</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="../css/contactUs.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/index/favicon.png.ico" type="image/x-icon">

</head>
<body>
<?php
include "header.php";

?>

    <section>
        <div class="row">
            <h2 class="section-heading">How May We Help You?</h2>
        </div>
        <div class="row">
            <div class="column">
                <a href="#">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <h3>Track Orders</h3>
                    <p>Track your orders here</p>
                </div>
                </a>
            </div>
            <div class="column">
                <a href="#">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h3>Payment Settings</h3>
                    <p>Manage Payment methods, add or delete card</p>
                </div>
                </a>
            </div>
            <div class="column">
                <a href="#">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3>Return And Refund</h3>
                    <p>Return or Exchange Items</p>
                </div>
                </a>
            </div>
            <div class="column">
                <a href="#">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3>Manage Account</h3>
                    <p>Update Login Information</p>
                </div>
                </a>
            </div>
            <div class="column">
                <a href="#">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Manage Address</h3>
                    <p>Update Landmark Details, Address</p>
                </div>
                </a>
            </div>
            <div class="column">
                <a href="#">
                <div class="card">
                    <div class="icon-wrapper">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Manage Cart</h3>
                    <p>Add Or Delete Items From Cart</p>
                </div>
                </a>
            </div>
        </div>
        <div class="row">
            <h2 class="section-heading">Contact Our Customer Support</h2>
        </div>
        <div class="row">
            <div class="contact-box">
                <form action="save.php" method="post">
                    <input type="text" name="name" class="input-field" placeholder="Your Name">
                    <input type="text"  name="number" class="input-field" placeholder="Your Phone Number">
                    <input type="email" name="email" class="input-field" placeholder="Your Email">
                    <input type="text" name="sub" class="input-field" placeholder="Subject">
                    <textarea name="msg" id="" cols="30" rows="10" class="input-field textarea-field" placeholder="Enter Your Message"></textarea>
                    <button type="submit" class="btn submit">Send Message</button>
                </form>
            </div>
        </div>

        <?php
            include "footer1.php";
        ?>
    </section>

    
</body>
</html>