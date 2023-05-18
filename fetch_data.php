<?php

//fetch_data.php

include('php/createDb.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM producttb WHERE product_status = '1'
	";
	
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND brand IN('".$brand_filter."')
		";
	}
	
	

	$statement = $conn->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-md-3 mb-2">
             <form action="index.php" method="post">
                 <div class="card shadow">
                    <div class="cardp">
                         <a href="<?php printf(\'%s?item_id=%s\',\'./product_detail.php\','.$row['id'].'\)?>"><img src="'. $row['product_image'].'" alt="image1" class="img-fluid card-img-top"></a>
                         <h6 class="text-light bg-info text-center rounded p-1">'.$row['product_name'].'</h6>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-danger">price : $'.$row['product_price'].' </h4>
                        <h8>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </h8>
                        <p class="card-text">                        
                            RAM: '.$row['product_txt'].'<br>
                            HDD:<br>
                            Processor:<br>
                            Screen Size:<br>
                            <a href="./product_detail.php" class="btn btn-warning my-2">Details<i class="fas fa-shopping-cart"></i></a>
                        </p>                                 
                    </div>
                </div>
             </form>
        </div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>