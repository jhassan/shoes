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

			$query = "SELECT `article_no`, `sh_credit`, `date_purchase`, `size_code`, SUM(`sh_credit`) AS credit_shoes, 
					`tbl_purchase_detail`.`purchase_id`, MAX(`sale_price`) AS shoes_price
					FROM `tbl_purchase`
					INNER JOIN `tbl_purchase_detail` ON `tbl_purchase_detail`.`purchase_id` = `tbl_purchase`.`purchase_id`
					WHERE `article_no` LIKE '".$keyword."'
					GROUP BY `size_code`";
					//echo $query; die;
			$list = MySQLQuery($query);
			//print_r($list); die;	
			foreach ($list as $rs) {
			// put in bold the written text
			$article_no = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['article_no']);
			// add new option
		    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['article_no']).'\'); clickme('.$rs['country_id'].');" style="cursor: pointer;">'.$article_no.'</li>';
		}
		break;
		
		
		
		
		
	}

?>