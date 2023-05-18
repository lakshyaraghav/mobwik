<?php
$brand = array_map(function ($pro) {
  return $pro['brand'];
}, $product_shuffle);
$unique = array_unique($brand);
sort($unique);

$price = array_map(function ($pro) {
  return $pro['product_price'];
}, $product_shuffle);
$utl = array_unique($price);
sort($utl);

?>
<section id="top-sale">
  <div class="container-fluid">
    <div class="row py-4">
      <div class="col-lg-3">
        <h5>Filter Product</h5>
        <hr>
        <h6 class="text-info">Select Brand</h6>
        <ul class="list-group">
          <li class="list-group-item">
            <div class="form-check">
              <label class="form-check-label">
                <button class="btn is-checked" data-filter="*">All Brands</input></button>
              </label>
            </div>
          </li>
          <?php
          array_map(function ($brand) {
            printf('<li class="list-group-item">
                    <div class="form-check">
                      <label class="form-check-label">
                      <button class="btn " data-filter=".%s" >%s</button>
                      </label>            
                     </div>
                  </li>', $brand, $brand);
          }, $unique);
          ?>
        </ul>
        <hr>
        <h6 class="text-info">Select Price</h6>
        <ul class="list-group">
          <li class="list-group-item">
            <div class="form-check">
              <label class="form-check-label">
                <button class="btn is-checked" data-filter="*">All Price</input></button>
              </label>
            </div>
          </li>
          <?php
          array_map(function ($price) {
            printf('<li class="list-group-item">
                    <div class="form-check">
                      <label class="form-check-label">
                      <button class="btn " data-filter=".%s" >%s</button>
                      </label>            
                     </div>
                  </li>', $price, $price);
          }, $utl);
          ?>
        </ul>
      </div>
      <div class="col-lg-9">
        <h5 class="text-center" id="textChange">All Products</h5>
        <hr>
        <div class="grid">
          <?php array_map(function ($item) { ?>

            <style>
              a:link {
                text-decoration: none;
              }
            </style>
            <div class="grid-item py-1 border <?php echo $item['brand']; ?> <?php echo $item['product_price']; ?> ">
              <div class="item py-0" style="width: 160px;">
                <div class="product font-rale">
                  <div class="cardp">
                    <a href="<?php printf('%s?item_id=%s', 'product_detail.php',  $item['id']); ?>"><img src="<?php echo $item['product_image']; ?>" alt="product1" class="img-fluid"></a>
                    <a href="<?php printf('%s?item_id=%s', 'product_detail.php',  $item['id']); ?>">
                      <h6 class="text-light bg-info text-center rounded p-1"><?php echo $item['product_name']; ?></h6>
                    </a>
                  </div>
                  <a href="<?php printf('%s?item_id=%s', 'product_detail.php',  $item['id']); ?>">
                    <div class="text-center">
                      <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                      </div>
                      <div class="price py-2">
                        <h6 class="card-title text-danger">price : $<?php echo $item['product_price']; ?> </h6>
                      </div>
                      <a href="<?php printf('%s?item_id=%s', 'product_detail.php',  $item['id']); ?>" class="btn btn-warning my-2">Details<i class="fas fa-shopping-cart"></i></a>

                      <!-- <button type="submit" class="btn btn-warning font-size-12">In the Cart</button> -->

                    </div>
                  </a>
                </div>
              </div>
            </div>
          <?php }, $product_shuffle) ?>
        </div>
        <hr>
        <!-- <section id="banner_adds">        
          <div class="container py-5 text-center ban" style="width: 160px;">
            <img src="img/1.png" alt="banner1" class="img-fluid">
            <img src="img/2.png" alt="banner2" class="img-fluid">
          </div>

        </section> -->
      </div>
    </div>
</section>