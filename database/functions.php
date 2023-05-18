<?php

require('./database/Dbconn.php');


require('./database/product.php');


$db= new DBController();

$db1= new DBController();

$product= new Product($db);

