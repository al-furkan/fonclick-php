<?php
     
session_start();
include("db.php");
if(isset($_SESSION["email"])){
$_SESSION["email"];
$email =  $_SESSION["email"];
$get_user = "select * from user_info where email ='$email'";
$run_user = mysqli_query($con, $get_user);
$row_user=mysqli_fetch_array($run_user);
$id = $row_user['user_id'];
$name= $row_user['namea'];
$email = $row_user['email'];
$Mobile = $row_user['mobile'];
$address = $row_user['address1'];
}
?>


<section id="heder">
        <a href="#"> <img src="img/logo.png" class="logo" alt=""></a>
         
        <div class="search-container">
  <form action="result.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="Search..." name="search">
    <button type="submit">Search</button>
  </form>
</div>


        <div>
            <ul id="navebbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="catagory.php">Catagory</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>

                <?php
               if(!isset($_SESSION["email"])){
                echo"
                <li><a href='./login.php'>Login/</a>
                    <a href='./login.php'>Sign Up</a>
                </li>";
               }
                else{
                    echo"
                    <li>
                    <a href='./logout.php'>Logout</a>
                     </li>
                     <li><a href='./profile.php?profile=$id'>
                     <div class='user text-center'>
                    <div class='profile'>

                      <img src='https://i.imgur.com/JgYD2nQ.jpg' class='rounded-circle' width='40'>
                     </div>
                     </div>
                     </a>
                     </li>
                     
                     ";

                }
                ?>
                <li id="lg-bag"><a href="card.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                <a href="#" id="close"><i class="fa fa-times" aria-hidden="true"></i></a>
            </ul>

        </div>
        <div id="mobile">
            <a href="card.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>