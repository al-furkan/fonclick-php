


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fonclick catagory</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php
include("./header.php");
?>


<section id="feature" class="section-p1">

<?php
   

   $get_w = "select * from catagori order by id desc";
   $run_w = mysqli_query($con, $get_w);
   $i=0;
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
<script src="./js/script.js"></script>
</body>
</html>