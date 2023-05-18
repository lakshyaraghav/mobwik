
<?php
  require("./database/functions.php");
?>
<?php
  $product_shuffle=$product->getData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  
  
  
  
    <title>MOBwik</title>
</head>
<body>
<!-- navbar-->


<?php
  include_once('./php/header.php');
?>
<div id="search-layer"></div>
	
    <!-- <div id="lowrbdy">
		<img class="bdimg" src="os1.jpg">
	</div> -->
<!-- navbar end-->
<?php
 // $result=$db->con->query("SELECT * FROM producttb WHERE product_name LIKE 'a%'");
  //while($row=mysqli_fetch_array($result)){
    //echo "" .$row["product_name"]."";
  //}
?>



<?php
  include_once('./php/banner.php');
?>

<!-- crousel end-->

<?php
   include('./php/latest_pro.php');
?>

<?php
   include('./php/main_frame.php');
?>






<!--javascript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
<script src="./index.js"></script>





<!--footer-->

<?php include_once('./php/footer.php')?>

<div class="container py-3 ">
   <div class="card shadow ">
     <div class="card">
       <h3 class="card-header">Note 9 Pro</h3>
     </div>
     <div class="row g-0 mycard">
       <div class="col-md-4">
         <img src="./img/product1.png" alt="image1" class="img-fluid">
       </div>
       <div class="col-md-8 ">        
         <div class="card-body">
            <p class="card-text"><i class="fa fa-calendar" aria-hidden="true"></i> Release 2021, March</p>
            <p class="card-text"><i class="fa fa-mobile" aria-hidden="true"></i> 193g,8.1mm thickness</p>
            <p class="card-text"><i class="fa fa-code" aria-hidden="true"></i> Android 11,MIUI 12</p>
            <p class="card-text"><i class="fa fa-certificate" aria-hidden="true"></i> 64GB/128GB storage, microSDXC</p>
          </div>
       </div>
     </div>
     <div class="card-footer text-center "> 
                
              <!-- <button class="btn btn-primary btn-lg float-left"
                          id="left" style="color:white"> 
                  Left Button 
              </button> 
                
              <button class="btn btn-warning btn-lg"
                      id="center" style="color:white"> 
                  Center Button 
              </button> 
                
              <button class="btn btn-danger btn-lg float-right"
                      id="right" style="color:white"> 
                  Right Button 
              </button>  -->
              <a href="./product_detail.php" class="btn btn-bg-transparent btn-lg float-right">COMPARE<i class="fas fa-shopping-cart"></i></a> 
              <a href="./product_detail.php" class="btn btn-bg-transparent mr-2 btn-lg float-right">COMPARE<i class="fas fa-shopping-cart"></i></a> 
          </div> 
   </div>
   
</div>
<a href="./product_detail.php" class="btn btn-warning my-2 card-footer">COMPARE<i class="fas fa-shopping-cart"></i></a>  
</body>
</html>


<!-- <div class="row text-center py-5">
  <div class="col-md-3 col-sm-6 my-3 my-md-0">
             <form action="index.php" method="post">
                 <div class="card shadow">
                    <div class="cardp">
                         <img src="./img/product1.png" alt="image1" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                         <h6 class="card-title">product1</h6>
                         <h8>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </h8>
                        <p class="card-text">
                            note 9 pro
                        </p>
                        <h6>
                            <small><s class="text-secondary">$519</s></small>
                            <span class="price">$599</span>
                        </h6>
                             <a href="php/product_detail.php" <button class="btn btn-warning my-2" >>Details<i class="fas fa-shopping-cart"></i></button></a>-->
                            <!-- <a class="button" href="./php/product_detail.php" target="_blank">New Discussion</a> -->
                            <!--<button type="submit" onclick="window.open('php/product_detail.php')">btn</button>  -->
                            <!-- <a href="./product_detail.php" class="btn btn-warning my-2">Details<i class="fas fa-shopping-cart"></i></a> -->
                    <!-- </div>
                </div>
             </form>
        </div>
  </div> --> 
  <div class="container">

  
  </div>


  <?php
              $result=$db->con->query("SELECT * FROM producttb WHERE product_name LIKE 'a%'");
              while($row=mysqli_fetch_array($result)){

            ?>
            <ul id="dataViewer">
            <li><?php echo $row['product_name']; ?></li>
            <!-- <li>name2</li>
            <li>name3</li> -->
            </ul>

            <?php  } ?> 

            <?php
              $result=$db->con->query("SELECT * FROM producttb WHERE product_name LIKE 'a%'");
              while($row=mysqli_fetch_array($result)){
              echo "" .$row["product_name"]."";
              }
             ?>