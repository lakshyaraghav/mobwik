<?php
  require("./database/functions.php");
?>

<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) {
        if ($item['id'] == $item_id) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- <link rel="stylesheet" type="text/css" href="css/product.css"/> -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>MOBwik</title>
</head>
<body>
    <!--header -->
     <?php
       include_once('./php/header.php');
     ?>
    <!--header end-->

   <div class="container py-3 ">
     <div class="card shadow ">
       <div class="card">
         <h3 class="card-header"><?php echo $item['product_name'] ?></h3>
       </div>
       <div class="row g-0 mycard">
         <div class="col-md-4">
           <img src="<?php echo $item['product_image'] ?>" alt="image1" class="img-fluid">
           <div class="small-img-row d-flex flex-row">
               <input class="border text-muted " type="image" src="<?php echo $item['product_image'] ?>" alt="" style="width:23%; height:50%;">
               <input class="border text-muted " type="image" src="<?php echo $item['product_image'] ?>" alt="" style="width:23%; height:50%;">
               <input class="border text-muted " type="image" src="<?php echo $item['product_image'] ?>" alt="" style="width:23%; height:50%;">
               <input class="border text-muted " type="image" src="<?php echo $item['product_image'] ?>" alt="" style="width:23%; height:50%;">
             </div> 
         </div>
         <div class="col-md-4 ">        
           <div class="card-body">
              <p class="card-text"><i class="fa fa-calendar text-success" aria-hidden="true"></i> <?php echo $item['memory_internal'] ?></p>
              <p class="card-text"><i class="fa fa-mobile text-success" aria-hidden="true"></i> <?php echo $item['body_weight'] ?></p>
              <p class="card-text"><i class="fa fa-code text-success" aria-hidden="true"></i> Android 11,MIUI 12</p>
              <p class="card-text"><i class="fa fa-certificate text-success" aria-hidden="true"></i> 64GB/128GB storage, microSDXC</p>
            </div>
         </div>
         <div class="col-md-2 ">
           <div class="card-body">
             <h2>3.1%hkj</h2>
           </div>        
         </div>
         <div class="col-md-2 ">
           <div class="card-body">
             <h2>3.1%hkj</h2>
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
              <a href="./product_detail.php" class="btn btn-bg-transparent btn-md float-right"><strong>COMPARE</strong><i class="fas fa-shopping-cart text-success"></i></a> 
              <a href="./product_detail.php" class="btn btn-bg-transparent mr-2 btn-md float-right"><strong>COMPARE</strong><i class="fas fa-shopping-cart text-success"></i></a> 
          </div> 
      </div> 
      <br><br>
      <div id="highlight">
             <div class="row"> 
               <div class="col-sm-4"><strong><h4 class="text-info">Highlights</h4></strong></div> 
               <div class="col-sm-7">
                  <ul>
                    <li> 64GB ROM</li>
                    <li> 5.8 inch Super Retina HD Display</li>
                    <li> 12MP + 12MP Dual Rear Camera | 7MP Front Camera</li>
                    <li> lithium-ion Battery</li>
                    <li> A11 Bionic Chip with 64-bit Architecture, Neural Engine, Embedded M11 Motion Co-processor</li>
                 </ul>
               </div>
             </div>
       </div>
       <br><br>
      <div class="card" id="specifications">
            <div class="card-header" style="background-color:#fff;">
               <h3>Specifications</h3>
             </div>
            <div class="card-body">
              <h4 class="text-info">NETWORK</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                 <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Technology</th><td class="col-sm-8"> <?php echo $item['net_tech'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">2G Bands</th><td class="col-sm-8"> <?php echo $item['net_2g'] ?></td></tr>
                   
                    <tr class="d-flex"><th class="col-sm-4 text-muted">3G Bands</th><td class="col-sm-8"> <?php echo $item['net_3g'] ?></td> </tr>
                   
                   <tr class="d-flex"><th class="col-sm-4 text-muted">4G bands</th><td class="col-sm-8"> <?php echo $item['net_4g'] ?></td> </tr>
                   
                   <tr class="d-flex"><th class="col-sm-4 text-muted">5G bands</th><td class="col-sm-8"> <?php echo $item['net_5g'] ?></td> </tr>
                   
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Speed</th><td class="col-sm-8"> <?php echo $item['net_speed'] ?></td> </tr>
                   
              
                  </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4 class="text-info">LAUNCH</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Announced</th><td class="col-sm-8"><?php echo $item['launch_date'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Status</th><td class="col-sm-8"> <?php echo $item['launch_status'] ?></td></tr>
                </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4 class="text-info">BODY</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Dimensions</th><td class="col-sm-8"> <?php echo $item['body_dim'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Weight</th><td class="col-sm-8"> <?php echo $item['body_weight'] ?></td></tr>
                   
                    <tr class="d-flex"><th class="col-sm-4 text-muted">Build</th><td class="col-sm-8"> <?php echo $item['body_build'] ?></td> </tr>
                   
                   <tr class="d-flex"><th class="col-sm-4 text-muted">SIM</th><td class="col-sm-8"> <?php echo $item['body_sim'] ?></td> </tr>
                    
                 </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4 class="text-info">DISPLAY</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Type</th><td class="col-sm-8"> <?php echo $item['display_type'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Size</th><td class="col-sm-8"> <?php echo $item['display_size'] ?></td></tr>
                   
                    <tr class="d-flex"><th class="col-sm-4 text-muted">Resolution</th><td class="col-sm-8"> <?php echo $item['display_resolution'] ?></td> </tr>
                   
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Protection</th><td class="col-sm-8"> <?php echo $item['display_prot'] ?></td> </tr>
                </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4 class="text-info">PLATFORM</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">OS</th><td class="col-sm-8"> <?php echo $item['product_os'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Chipset</th><td class="col-sm-8"> <?php echo $item['product_chipset'] ?></td></tr>
                   
                    <tr class="d-flex"><th class="col-sm-4 text-muted">CPU</th><td class="col-sm-8"> <?php echo $item['product_cpu'] ?></td> </tr>
                   
                   <tr class="d-flex"><th class="col-sm-4 text-muted">GPU</th><td class="col-sm-8"> <?php echo $item['product_gpu'] ?></td> </tr>
                    
                 </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4 class="text-info">MEMORY</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Card slot</th><td class="col-sm-8"> <?php echo $item['memory_cardslot'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Internal</th><td class="col-sm-8"> <?php echo $item['memory_internal'] ?></td></tr>
                    
                 </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4 class="text-info">MAIN CAMERA</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted"><?php echo $item['camera_main'] ?></th><td class="col-sm-8"><?php echo $item['camera_main_spe'] ?></td> </tr>             
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Features</th><td class="col-sm-8"> <?php echo $item['camera_main_features'] ?></td> </tr>             
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Video</th><td class="col-sm-8"> <?php echo $item['camera_main_video'] ?></td> </tr>             
                 
                 </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4 class="text-info">SELFIE CAMERA</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted"><?php echo $item['camera_front'] ?></th><td class="col-sm-8"><?php echo $item['camera_front_spe'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Features</th><td class="col-sm-8"><?php echo $item['camera_front_features'] ?></td></tr>
                   
                    <tr class="d-flex"><th class="col-sm-4 text-muted">Video</th><td class="col-sm-8"> <?php echo $item['camera_front_video'] ?></td> </tr>
                     
                 </tbody>

               </table>
             </div>
           </div>
           <div class="card-body">
              <h4 class="text-info">SOUND</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Loudspeaker</th><td class="col-sm-8"><?php echo $item['sound_loudspeaker'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">3.5mm jack</th><td class="col-sm-8"> <?php echo $item['sound_3.5mm'] ?></td></tr>
                     
                 </tbody>

               </table>
             </div>
           </div>
           <div class="card-body">
              <h4 class="text-info">COMMS</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">WLAN</th><td class="col-sm-8"> <?php echo $item['comms_wlan'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Bluetooth</th><td class="col-sm-8"> <?php echo $item['comms_bluetooth'] ?></td></tr>
                   
                   <tr class="d-flex"><th class="col-sm-4 text-muted">GPS</th><td class="col-sm-8"> <?php echo $item['comms_gps'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">NFC</th><td class="col-sm-8"> <?php echo $item['comms_nfc'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Infrared port</th><td class="col-sm-8"> <?php echo $item['comms_radio'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Radio</th><td class="col-sm-8"> <?php echo $item['comms_usb'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">USB</th><td class="col-sm-8"> <?php echo $item['comms_infrared'] ?></td> </tr>
                       
                 </tbody>

               </table>
             </div>
           </div>
           <div class="card-body">
              <h4 class="text-info">FEATURES</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Sensors</th><td class="col-sm-8"> <?php echo $item['features_sensors'] ?></td> </tr>
                     
                 </tbody>

               </table>
             </div>
           </div>
           <div class="card-body">
              <h4 class="text-info">BATTERY</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Type</th><td class="col-sm-8"><?php echo $item['battery_type'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Charging</th><td class="col-sm-8"><?php echo $item['battery_charging'] ?></td> </tr>
                   
                 </tbody>

               </table>
             </div>
           </div>
           <div class="card-body">
              <h4 class="text-info">MISC</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Colors</th><td class="col-sm-8"><?php echo $item['misc_colors'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Models</th><td class="col-sm-8"><?php echo $item['misc_models'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Price</th><td class="col-sm-8"> <?php echo $item['misc_price'] ?></td> </tr>
                  
                 </tbody>

               </table>
             </div>
           </div>
           
           <div class="card-footer">
               <h4><a href="">Read More</a></h4>
               </div>
         </div> 
   </div>
    <div class="container">
     <div class="row py-3">
        <div class="col-md-4">
            <form action="product_detail.php" method="POST">
            <div class="card shadow">
              <img src="<?php echo $item['product_image'] ?>" width="100%"> 
              <div class="small-img-row d-flex flex-row">
                  <div class="small-img-col">
                    <div class="card shadow">
                      <img src="<?php echo $item['product_image'] ?>" width="100%"> 
                    </div>
                  </div>
                  <div class="small-img-col">
                  <div class="card shadow">
                      <img src="<?php echo $item['product_image'] ?>" width="100%"> 
                    </div>
                  </div>
                  <div class="small-img-col">
                  <div class="card shadow">
                      <img src="<?php echo $item['product_image'] ?>" width="100%"> 
                    </div> 
                  </div>
                  <div class="small-img-col">
                  <div class="card shadow">
                      <img src="<?php echo $item['product_image'] ?>" width="100%"> 
                    </div>
                  </div>
              </div> 
            </div> 
            </form>       
         </div>
        <div class="col-md-8 py-4 desc">
                  <p>HOME / Product</p>
                  <h5>Samsung</h5><br>
               <div class="row">
                  <div class="col-sm-2 ">
                    <span class="label text-success">4.6 <i class="fa fa-star" aria-hidden="true"></i></span>
                  </div>
           
                  <div class="col-sm-5">
                    <strong>2,421 Ratings & Reviews</strong>
                  </div>
               </div>
               <div>
                 <h3>Rs 92,400</h3> 
               </div>

              <div>                
                <h6><i class="fa fa-calendar text-success" aria-hidden="true"></i> EMIs from <strong>Rs 3,070/month </strong><a href="">View Plans <i class="fa fa-chevron-right"></i></a></h5>  
           
                <h6><i class="fa fa-tag text-success" aria-hidden="true"></i><strong> Bank Offer</strong> 5% Instant Discount on Visa Cards for First 3 Online Payments. <a href="">T&C</a></h5>
           
                <h6><i class="fa fa-tag text-success" aria-hidden="true"></i><strong> Bank Offer</strong> Extra 5% off* with Axis Bank Buzz Credit Card. <a href="">T&C</a></h5>
             </div>  
             <br>
             <h4>product details</h4>
             <p>i tried very hard for making this website but dont know they complete or not</p> 
             
            <div class="row">
             
             <div class="col-sm-6">
               <strong>Color</strong>
                <br><br>
                <!-- <button class="btn btn-default" style="width:50px;border:1px dashed #337ab7;"><img src="./img/product1.png" alt=""></button>
               <button class="btn btn-default" style="width:50px;"></button> -->
               <input class="border text-muted " type="image" src="<?php echo $item['product_image'] ?>" alt="" style="width:20%; height:50%;">
               <input class="border text-muted " type="image" src="<?php echo $item['product_image'] ?>" alt="" style="width:20%; height:50%;">
               <input class="border text-muted " type="image" src="<?php echo $item['product_image'] ?>" alt="" style="width:20%; height:50%;">
               <input class="border text-muted " type="image" src="<?php echo $item['product_image'] ?>" alt="" style="width:20%; height:50%;">
               
              </div>
             
             <div class="col-sm-6">
               <strong>Storage</strong>
               <br>
               <br>
               <button class="btn btn-default" style="color:#337ab7;border:1px dashed #337ab7;">64GB</button>
               <button class="btn btn-default">256GB</button>
             </div>             
            </div>  
            <br><br>
            <br> <br>

           <div id="highlight">
             <div class="row"> 
               <div class="col-sm-3"><strong><h5 class="text-muted">highlights</h5></strong></div> 
               <div class="col-sm-7">
                  <ul>
                    <li> 64GB ROM</li>
                    <li> 5.8 inch Super Retina HD Display</li>
                    <li> 12MP + 12MP Dual Rear Camera | 7MP Front Camera</li>
                    <li> lithium-ion Battery</li>
                    <li> A11 Bionic Chip with 64-bit Architecture, Neural Engine, Embedded M11 Motion Co-processor</li>
                 </ul>
               </div>
             </div>
           </div> 
           <br<br>
           <br> <hr>

        
           
           <!-- Specifications -->
           <div class="card" id="specifications">
            <div class="card-header" style="background-color:#fff;">
               <h3>Specifications</h3>
             </div>
            <div class="card-body">
              <h4>NETWORK</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                 <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Technology</th><td class="col-sm-8"> <?php echo $item['net_tech'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">2G Bands</td><td class="col-sm-8"> <?php echo $item['net_2g'] ?></td></tr>
                   
                    <tr class="d-flex"><td class="col-sm-4 text-muted">3G Bands</td><td class="col-sm-8"> <?php echo $item['net_3g'] ?></td> </tr>
                   
                   <tr class="d-flex"><td class="col-sm-4 text-muted">4G bands</td><td class="col-sm-8"> <?php echo $item['net_4g'] ?></td> </tr>
                   
                   <tr class="d-flex"><td class="col-sm-4 text-muted">5G bands</td><td class="col-sm-8"> <?php echo $item['net_5g'] ?></td> </tr>
                   
                   <tr class="d-flex"><td class="col-sm-4 text-muted">Speed</td><td class="col-sm-8"> <?php echo $item['net_speed'] ?></td> </tr>
                   
              
                  </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4>LAUNCH</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Announced</th><td class="col-sm-8"><?php echo $item['launch_date'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">Status</td><td class="col-sm-8"> <?php echo $item['launch_status'] ?></td></tr>
                </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4>BODY</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Dimensions</th><td class="col-sm-8"> <?php echo $item['body_dim'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">Weight</td><td class="col-sm-8"> <?php echo $item['body_weight'] ?></td></tr>
                   
                    <tr class="d-flex"><td class="col-sm-4 text-muted">Build</td><td class="col-sm-8"> <?php echo $item['body_build'] ?></td> </tr>
                   
                   <tr class="d-flex"><td class="col-sm-4 text-muted">SIM</td><td class="col-sm-8"> <?php echo $item['body_sim'] ?></td> </tr>
                    
                 </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4>DISPLAY</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Type</th><td class="col-sm-8"> <?php echo $item['display_type'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">Size</td><td class="col-sm-8"> <?php echo $item['display_size'] ?></td></tr>
                   
                    <tr class="d-flex"><td class="col-sm-4 text-muted">Resolution</td><td class="col-sm-8"> <?php echo $item['display_resolution'] ?></td> </tr>
                   
                   <tr class="d-flex"><td class="col-sm-4 text-muted">Protection</td><td class="col-sm-8"> <?php echo $item['display_prot'] ?></td> </tr>
                </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4>PLATFORM</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">OS</th><td class="col-sm-8"> <?php echo $item['product_os'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">Chipset</td><td class="col-sm-8"> <?php echo $item['product_chipset'] ?></td></tr>
                   
                    <tr class="d-flex"><td class="col-sm-4 text-muted">CPU</td><td class="col-sm-8"> <?php echo $item['product_cpu'] ?></td> </tr>
                   
                   <tr class="d-flex"><td class="col-sm-4 text-muted">GPU</td><td class="col-sm-8"> <?php echo $item['product_gpu'] ?></td> </tr>
                    
                 </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4>MEMORY</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Card slot</th><td class="col-sm-8"> <?php echo $item['memory_cardslot'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">Internal</td><td class="col-sm-8"> <?php echo $item['memory_internal'] ?></td></tr>
                    
                 </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4>MAIN CAMERA</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted"><?php echo $item['camera_main'] ?></th><td class="col-sm-8"><?php echo $item['camera_main_spe'] ?></td> </tr>             
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Features</th><td class="col-sm-8"> <?php echo $item['camera_main_features'] ?></td> </tr>             
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Video</th><td class="col-sm-8"> <?php echo $item['camera_main_video'] ?></td> </tr>             
                 
                 </tbody>

               </table>
             </div>
           </div>
           <hr>
           <div class="card-body">
              <h4>SELFIE CAMERA</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted"><?php echo $item['camera_front'] ?></th><td class="col-sm-8"><?php echo $item['camera_front_spe'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">Features</td><td class="col-sm-8"><?php echo $item['camera_front_features'] ?></td></tr>
                   
                    <tr class="d-flex"><td class="col-sm-4 text-muted">Video</td><td class="col-sm-8"> <?php echo $item['camera_front_video'] ?></td> </tr>
                     
                 </tbody>

               </table>
             </div>
           </div>
           <div class="card-body">
              <h4>SOUND</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Loudspeaker</th><td class="col-sm-8"><?php echo $item['sound_loudspeaker'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">3.5mm jack</td><td class="col-sm-8"> <?php echo $item['sound_3.5mm'] ?></td></tr>
                     
                 </tbody>

               </table>
             </div>
           </div>
           <div class="card-body">
              <h4>COMMS</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">WLAN</th><td class="col-sm-8"> <?php echo $item['comms_wlan'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">Bluetooth</td><td class="col-sm-8"> <?php echo $item['comms_bluetooth'] ?></td></tr>
                   
                   <tr class="d-flex"><td class="col-sm-4 text-muted">GPS</td><td class="col-sm-8"> <?php echo $item['comms_gps'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">NFC</td><td class="col-sm-8"> <?php echo $item['comms_nfc'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">Infrared port</td><td class="col-sm-8"> <?php echo $item['comms_radio'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">Radio</td><td class="col-sm-8"> <?php echo $item['comms_usb'] ?></td> </tr>
                   <tr class="d-flex"><td class="col-sm-4 text-muted">USB</td><td class="col-sm-8"> <?php echo $item['comms_infrared'] ?></td> </tr>
                       
                 </tbody>

               </table>
             </div>
           </div>
           <div class="card-body">
              <h4>FEATURES</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Sensors</th><td class="col-sm-8"> <?php echo $item['features_sensors'] ?></td> </tr>
                     
                 </tbody>

               </table>
             </div>
           </div>
           <div class="card-body">
              <h4>BATTERY</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Type</th><td class="col-sm-8"><?php echo $item['battery_type'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Charging</th><td class="col-sm-8"><?php echo $item['battery_charging'] ?></td> </tr>
                   
                 </tbody>

               </table>
             </div>
           </div>
           <div class="card-body">
              <h4>MISC</h4>
     
             <div class="table-responsive">
              <table class="table table-default ">

                <tbody>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Colors</th><td class="col-sm-8"><?php echo $item['misc_colors'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Models</th><td class="col-sm-8"><?php echo $item['misc_models'] ?></td> </tr>
                   <tr class="d-flex"><th class="col-sm-4 text-muted">Price</th><td class="col-sm-8"> <?php echo $item['misc_price'] ?></td> </tr>
                  
                 </tbody>

               </table>
             </div>
           </div>
           
           <div class="card-footer">
               <h4><a href="">Read More</a></h4>
               </div>
         </div>
         
  
        </div>
      </div>
    </div>
      
         
      
  
   <?php } }  ?>

   <?php include_once('./php/footer.php')?>
</body>
</html>