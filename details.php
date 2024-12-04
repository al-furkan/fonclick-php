<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FonClick Shopping</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php

include("./header.php");

if(isset($_GET['prodetails'])){
    $get_id = $_GET['prodetails'];


$details= "select * from product where id='$get_id'";
$run_w = mysqli_query($con, $details);
$row_w=mysqli_fetch_array($run_w);
 $proid = $row_w['id'];
 $productname = $row_w['namea'];
 $price = $row_w['price'];
 $catagori= $row_w['catagori'];
 $img1 = $row_w['img1'];
 $img2 = $row_w['img2'];
 $img3 = $row_w['img3'];
 $img4 = $row_w['img4'];
 $discription = $row_w['discript'];
}


?>
    <section id="prodetails" class="section-p1">
        <div class="single-pro-img">
            <img src="./uploads/<?php echo $img1 ?>" width="100%" height="500px" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="./uploads/<?php echo $img1 ?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./uploads/<?php echo $img2 ?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./uploads/<?php echo $img3 ?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="./uploads/<?php echo $img4 ?>" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>


        <div class="single-pro-details">
            <h2><?php echo $productname ?></h2>
            <h4> <?php echo $catagori ?></h4>
            <h3><?php echo $price ?> BDT</h3>
            <form action="details.php?prodetails=<?php echo $proid; ?>" method="post" enctype="multipart/form-data">
                <?php  if(isset($_SESSION["email"])){  ?>
                <select id="name" name="size">
                    <option value="">Select Size</option>
                    <option value="Default">Default</option>
                    <option value="XL">XL</option>
                    <option value="XLL">XXL</option>
                    <option value="Small">Small</option>
                    <option value="Large">Large</option>
                    <option value="Baby">Baby</option>
                </select>
                <input type="Number" name="countpro" id="count" value="1">
                <button type="submit" name="btn1" class="normal">Buy Now</button>
                <button type="submit" name="btn2" class="normal" style="margin-top:30px;>Order Drone Delivary</button>
                <?php }  ?>


                <?php  if(!isset($_SESSION["email"])){  ?>

                <select id=" name" name="size">
                    <option value="">Select Size</option>
                    <option value="Default">Default</option>
                    <option value="XL">XL</option>
                    <option value="XLL">XXL</option>
                    <option value="Small">Small</option>
                    <option value="Large">Large</option>
                    <option value="Baby">Baby</option>
                    </select>
                    <input type="Number" name="countpro" id="count" value="1" required>
                    <input type="text" name="name" id="normal" placeholder="Enter name" required>
                    <input type="text" name="number" id="normal" placeholder="Enter Phone Number" required>
                    <button type="submit" name="btn2" class="normal">Order Cash On Delivary</button>
                    <button type="submit" name="btn2" class="normal" style="margin-top:30px;">Order Drone
                        Delivary</button>
            </form>
            <?php }  ?>

            <?php

    if(isset($_POST['btn1']))
    {

      $size =$_POST['size'];
      $countpro=$_POST['countpro'];

      $added  = mysqli_query($con,"INSERT INTO cart(pname, pemail, pphone, paddress, proname, proprice, proimg, prosize, procount) VALUES ('$name','$email','$Mobile','$address','$productname','$price','$img1','$size','$countpro')") or die ("query incorrect");
    
    if($added){
      echo "<script>alert('Work post Complite!')</script>";
      echo "<script>window.open('shop.php','_self')</script>";
    }
    
    else{
      echo "<script>alert('Your register incomplited!')</script>";
      echo "<script>window.open('details.php?prodetails=$proid','_self')</script>";
    }
    mysqli_close($con);
    }
    
    ?>


            <h4>Product Details</h4>
            <span>
                <pre>
                <?php echo $discription ;?>
                </pre>

            </span>
        </div>
    </section>




    <section id="product1" class="section-p1">
        <h2> New ArriVal</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-containar">
            <?php
       

       $get_w = "SELECT * FROM product order by RAND()LIMIT 0,50";
       $run_w = mysqli_query($con, $get_w);
       $i=0;
       while($row_w=mysqli_fetch_array($run_w)){
        $id = $row_w['id'];
        $productname = $row_w['namea'];
        $price = $row_w['price'];
        $catagori= $row_w['catagori'];
        $img1 = $row_w['img1'];
        $img2 = $row_w['img2'];
        $img3 = $row_w['img3'];
        $img4 = $row_w['img4'];
        $discription = $row_w['discript'];
        ?>


            <div class="pro" onclick="window.location.href='details.php?prodetails=<?php echo $id ?>'">
                <img src="./uploads/<?php echo $img1 ?>" alt="">
                <div class="des">
                    <span><?php echo $catagori ?></span>
                    <h5><?php echo $productname ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4><?php echo $price ?> BDT</h4>
                </div>
                <a class="cart" href="#"><i class="fa fa-shopping-cart"></i></a>
            </div>




            <?php
       }
              ?>
            <div class="pro">
                <img src="img/images (7).png" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>product name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a class="cart" href="#"><i class="fa fa-shopping-cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/images (9).png" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>product name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a class="cart" href="#"><i class="fa fa-shopping-cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/images.png" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>product name</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a class="cart" href="#"><i class="fa fa-shopping-cart"></i></a>
            </div>
        </div>
    </section>
    <section id="newslater" class="section-p1 section-m1">
        <div class="newstext">
            <h4>sing up For newslater</h4>
            <p>E-mail updates our latest shop and special offer
                <span>special offer.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" name="" id="" placeholder="Your imail address">
            <button class="normal">Sign up</button>
        </div>

    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Bagerpara jessore Kulna</p>
            <p><strong>Phome:</strong> 01568324336</p>
            <p><strong>Houre:</strong> 6am to 12 pm</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>


                </div>
            </div>

        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">about us</a>
            <a href="#">delivary Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & codition</a>
            <a href="#">contact Us</a>

        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>

        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>Form App Store Or Google Play</p>
            <div class="row">
                <a href="#"><img src="img/appstore.png" alt=""></a>
                <a href=""><img src="img/playstore.png" alt=""></a>
            </div>
            <p>Form App Store Or Google Play</p>
            <img src="img/payment.png" alt="">
        </div>

    </footer>
    <div class="copiright">
        <p> @2002 Teach -javascript Tamplate</p>
    </div>
    <script>
    var MainImg = document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");
    smallimg[0].onclick = function() {
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick = function() {
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick = function() {
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick = function() {
        MainImg.src = smallimg[3].src;
    }
    </script>


    <script src="js/script.js"></script>
</body>

</html>