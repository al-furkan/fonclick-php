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




    ?>
    <section id="hero">
        <h4>Trade in off</h4>
        <h2>Super Value deatls</h2>
        <h1>on all Product</h1>
        <p>save more money & up to 70% off!</p>
        <button>Shop Now</button>
    </section>


    <section id="feature" class="section-p1">

    <?php
       

       $get_w = "select * from catagori order by id desc";
       $run_w = mysqli_query($con, $get_w);
       while($row_w=mysqli_fetch_array($run_w)){
        $id = $row_w['id'];
        $catagoriname = $row_w['catagoriname'];
        $catagorimg = $row_w['cataimg'];
       
        ?>
        <div class="fe-box">
           <a href="viewcatagoriproduct.php?cataid=<?php echo $id ?>">
           <img src="./uploads/<?php echo $catagorimg ?> "alt="">
            <h6><?php echo $catagoriname ?></h6>
           </a>
        </div>

    <?php } ?>

        <div class="fe-box">
            <img src="img/imga5.png" alt="">
            <h6>Free Shiping</h6>
        </div>

        <div class="fe-box">
            <img src="img/img2.png" alt="">
            <h6>Free Shiping</h6>
        </div>
        <div class="fe-box">
            <img src="img/img3.png" alt="">
            <h6>Free Shiping</h6>
        </div>
        <div class="fe-box">
            <img src="img/imga4.png" alt="">
            <h6>Free Shiping</h6>
        </div>
        <div class="fe-box">
            <img src="img/b.png" alt="">
            <h6>Free Shiping</h6>
        </div>

    </section>

    <section id="product1" class="section-p1">

        <h2>Featured Producted</h2>
        <p>Summer Collection new Morden Design</p>
        <div class="pro-containar">
      

        <?php
       

       $get_w = "SELECT * FROM product order by RAND()LIMIT 0,50";
       $run_w = mysqli_query($con, $get_w);

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
                <a class="cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
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
            <div class="pro">
                <img src="img/shoppi_noun_002_33487.jpg" alt="">
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
                <img src="img/shopping-bags-vector-720994.jpg" alt="">
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
                <img src="img/cc.png" alt="">
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
                <img src="img/fasian.png" alt="">
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
    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% off</span> All t-Shirt & Accesoriase</h2>
        <Button class="normal">Explore More</Button>
    </section>
    <section id="product1" class="section-p1">

        <h2>New Arrivals</h2>
        <p>Summer Collection new Morden Design</p>
        <div class="pro-containar">

        <!-- $get_pro = "SELECT * FROM product order by RAND()LIMIT 0,12"; -->

        <?php
       

       $get_w = "select * from product order by id asc limit 50";
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
                <img src="img/abj.jpg" alt="">
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
                <img src="img/fasan.png" alt="">
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
                <img src="img/images (2).png" alt="">
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
                <img src="img/images (3).png" alt="">
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
                <img src="img/images (4).png" alt="">
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
                <img src="img/images (5).png" alt="">
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
                <img src="img/images (8).png" alt="">
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
    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>Buy 1 get 1 Free</h2>
            <span> the best classic Drass is on sale at care</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>crazy deals</h4>
            <h2>Buy 1 get 1 Free</h2>
            <span> the best classic Drass is on sale at care</span>
            <button class="white">Learn More</button>
        </div>
    </section>
    <section id="banner3">
        <div class="boder-box">
            <h2>Buy 1 get 1 Free</h2>
            <h3> winter is 20% off</h3>
        </div>
        <div class="boder-box boder-box1">
            <h2>Buy 1 get 1 Free</h2>
            <h3> winter is 20% off</h3>
        </div>
        <div class="boder-box boder-box2">
            <h2>Buy 1 get 1 Free</h2>
            <h3> winter is 20% off</h3>
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
    <script src="js/script.js"></script>
</body>

</html>


