<section id="latest"> 
  <div class="scrolling-wrapper">
     <h3 class="latest" style="margin-top:20px; text-align:center;" >Latest Products</h3>
      <hr>
    <div class="py-5 d-flex flex-row flex-nowrap overflow-auto ">
    
  
    <?php
              $result=$db->con->query("SELECT * FROM producttb ");
              while($row=mysqli_fetch_array($result)){

            ?>
           <div class="col-md-2 mb-2">
            <form action="index.php" method="post">
                <div class="card shadow">
                   <div class="cardp">
                        <a href="<?php printf('%s?item_id=%s', 'product_detail.php',  $row['id']); ?>"><img src="<?php echo $row['product_image'];?>" alt="image1" class="img-fluid card-img-top"></a>
                        <h6 class="text-light bg-info text-center rounded p-1"><?php echo $row['product_name']; ?></h6>
                   </div>
                   <div class="card-body">
                       <h5 class="card-title text-danger">price : $<?php echo $row['product_price']; ?> </h5>
                       <h8 class="text-warning">
                             <span><i class="fas fa-star"></i></span>
                             <span><i class="fas fa-star"></i></span>
                             <span><i class="fas fa-star"></i></span>
                             <span><i class="fas fa-star"></i></span>
                             <span><i class="far fa-star"></i></span>
                       </h8>
                       <p class="card-text">                        
                           RAM:<?php echo $row['product_txt']; ?><br>
                           HDD:<br>
                           Processor:<br>
                           Screen Size:<br>
                           <a href="<?php printf('%s?item_id=%s', 'product_detail.php',  $row['id']); ?>" class="btn btn-warning my-2">Details<i class="fas fa-shopping-cart"></i></a>
                       </p>                                 
                   </div>
               </div>
            </form>
       </div>
       <?php  } ?>     
    </div>
</div>
</section>