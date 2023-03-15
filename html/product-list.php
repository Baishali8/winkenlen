<?php
include('../database/dbcon.php');
$id= $_GET['category_id'];
$result = mysqli_query($conn, "SELECT * FROM product");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List | Winkelen</title>
    <link rel="stylesheet" href="../css/product-list.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" />
    <link rel="shortcut icon" href="../images/index/favicon.png.ico" type="image/x-icon">
</head>
<body>
<?php
include "header.php";

?>

    <!-- Main Body -->
    <div class="wrapper">
        <div class="container">
            <div class="title">
                <h1>New Arrival</h1>
            </div>
            <div class="item-grid">
            <?php
            foreach($result as $row):
                if($row['category_id'] == $id):
                  ?>

                  <div class="item">
                    <div class="item-img">
                        <img src=".<?php echo $row['product_img']; ?>" alt="">
                        <div class="item-action">
                          <a href="<?php printf('%s?product_id=%s','./product.php',$row['product_id']); ?>" class="view">
                            <span>
                              <i class="fas fa-search-plus"></i>
                            </span>
                          </a>
                          <a href="#" class="buy">
                            <span>
                              <i class="fas fa-cart-plus"></i>
                            </span>
                          </a>
                          <a href="#" class="wishlist">
                            <span>
                              <i class="fas fa-heart"></i>
                            </span>
                          </a>
                        </div>
                    </div>

                    <div class="item-details">
                      <ul class="rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half-alt"></i></li>
                      </ul>
                      <p class="price">&#x20b9;<?php echo $row['product_price']; ?></p>
                      <p class="name"><?php echo $row['product_name']; ?></p>
                    </div>
                </div>

            <?php
            endif;
            endforeach;
            ?>
            </div>
        </div>
    </div>

    <?php
      include "footer1.php";
    ?>

    <script>
      let view = document.querySelectorAll('.view');
      let buy = document.querySelectorAll('.buy');
      let wishlist = document.querySelectorAll('.wishlist');

      setContent(view, 'View');
      setContent(buy, 'Add To Cart');
      setContent(wishlist, 'Save Item');

      function setContent(list, text){
        list.forEach(listItem => {
          listItem.setAttribute('data-before', text)
        });
      }
    </script>
    
</body>
</html>

