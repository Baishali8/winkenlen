<?php

include('../database/dbcon.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories | Winkelen</title>

    <!-- Css File -->
    <link rel="stylesheet" href="../css/category.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/index/favicon.png.ico" type="image/x-icon">

</head>

<body>

        <!-- header start -->
        <?php
include "header.php";

?>
    <div class="container">
        <h3 class="title">Categories</h3>

        <div class="product-container">

        <?php
        $result= mysqli_query($conn, "SELECT * FROM category");
        while($row=mysqli_fetch_array($result)){
        ?>

            <a href="<?php printf('%s?category_id=%s','./product-list.php',$row['category_id']); ?>">
                <div class="product">
                    <img src="<?php echo $row['category_img']; ?>" alt="">
                    <h3><?php echo $row['category_name']; ?></h3>
                </div>
            </a>

            <?php } ?>
            
        </div>

    </div>

    <?php
        include "footer1.php";
    ?>

<script src="../js/script.js" charset="utf-8"></script>
</body>

</html>