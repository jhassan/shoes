<?php
	session_start();
	ob_start();
	include_once('front_functions.php');
	
	$action = $_REQUEST['action'];
	$nUserId = $_SESSION["nUserId"];
	$strDate = date("Y-m-d");
	
	switch($action)
	{
		// Get all shoes for sale
		case "GetAllShoes":
			$keyword = '%'.$_POST['keyword'].'%';
			if(!empty($keyword) && $keyword != "%%")
			{
				$query = "SELECT `article_no`, `sh_credit`, purchase_detail_id, `date_purchase`, `size_code`, SUM(`sh_credit`) AS credit_shoes, 
					`tbl_purchase_detail`.`purchase_id`, MAX(`sale_price`) AS shoes_price
					FROM `tbl_purchase`
					INNER JOIN `tbl_purchase_detail` ON `tbl_purchase_detail`.`purchase_id` = `tbl_purchase`.`purchase_id`
					WHERE `article_no` LIKE '".$keyword."'
					GROUP BY `size_code`";
					// echo $query; die;
				$list = MySQLQuery($query);
				 // pr($list); die;	
				foreach ($list as $rs) { 
				// put in bold the written text
				$article_no = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['article_no'])."-".$rs['size_code'];
				// add new option
			     echo '<li onclick="AddProductToSale('.$rs['purchase_detail_id'].','.$rs['article_no'].','.$rs['shoes_price'].',\''.$rs['size_code'].'\'); set_item(\''.str_replace("'", "\'", $rs['article_no']).'\')"; style="cursor: pointer;">'.$article_no.'</li>';
				}	
			
			} //echo '<li onclick="AddProductToSale('$rs['purchase_id'],$rs['article_no'],$rs['shoes_price']'); " style="cursor: pointer;">'.$article_no.'</li>';
		break;
		
		case "AddSaleDetails":
		//pr('fawad'); die;
		  $created_at = date("Y-m-d");
          $sql_invoice = "SELECT MAX(`invoice_id`)+1 AS invoice_id FROM `tbl_sale` where created_at = '".$created_at."'";
          $row_invoice_id = mysqli_query($conn,$sql_invoice);
          $array = mysqli_fetch_array($row_invoice_id);
          $last_invoice_id = $array['invoice_id'];

			$arrMaster = array(
				'discount_amount' => $_REQUEST['discount_amount'],
				'invoice_id' => $last_invoice_id,
				'net_amount' => $_REQUEST['net_amount'],
				'created_at' => date('Y-m-d'),
				'user_id' => $_SESSION['user_id']
				);
			//print_r($arrMaster); die;
				$nLastID = InsertRec("tbl_sale", $arrMaster);
				//pr($nLastID); die;
			if($nLastID != 0)
			{	
			$product_id = $_REQUEST['product_id'];

			for($i=0; $i<count($product_id); $i++)
			{
				//print_r($_REQUEST['shoes_price'][$i]); die;
				$arrDetail = array(
				'shoes_price' => $_REQUEST['shoes_price'][$i],
				'product_qty' => $_REQUEST['product_qty'][$i],
				'article_no' => $_REQUEST['article_no'][$i],
				'size_code' => $_REQUEST['size_code'][$i],
				'sale_id' => $nLastID,
				'date_sale' => date("Y-m-d H:i:s")
				);
				$nLastID = InsertRec("tbl_sale_detail", $arrDetail);
			}
			echo "done";
			}
			//header("Location: view_users");
		break;

	}

?>