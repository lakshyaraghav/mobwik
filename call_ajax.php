<?php
require('./database/functions.php');

?>


<?php
$s1 = $_REQUEST["n"];
$result = $db1->con->query("SELECT * FROM producttb WHERE product_name LIKE  '%" . $s1 . "%'");
$num = mysqli_num_rows($result);
$s = "";
while ($row = mysqli_fetch_array($result)) {
  $s = $s
?>

  <a class='link-p-colr' href="<?php printf('%s?item_id=%s', 'product_detail.php',  $row['id']); ?>">
    <div class='live-outer'>
      <div class="live-im">
        <img src="<?php echo $row['product_image']; ?>">
      </div>

      <div class='live-product-det'>
        <div class='live-product-name'>
          <p><?php echo $row['product_name']; ?></p>
        </div>
        <div class='live-product-price'>
          <div class='live-product-price-text'>
            <p>Rs<?php echo $row['product_price']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </a>



<?php
}
if ($s == "") {
  $resonse = "no suggestions";
} else {
  $resonse = $s;
}

echo $resonse;
?>