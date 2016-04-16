<?
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	ini_set("register_globals", 1);
	session_start();
	include_once('config.php');
	$DB_Server = "localhost";
	$DB_Username ="root";
	$DB_Password = "";
	$DB_DBName = "shoes";

	
	// function MySQLConnect()
	// 	{
	// 		$success = mysqli_connect($GLOBALS["DB_Server"], $GLOBALS["DB_Username"], $GLOBALS["DB_Password"],$GLOBALS["DB_DBName"]);
	// 		//$success= mysql_pconnect($GLOBALS["DB_Server"], $GLOBALS["DB_Username"], $GLOBALS["DB_Password"]);
	// 		//var_dump($success); die;
	// 		if (!$success)
	// 			echo mysql_errno() . ": " . mysql_error() . "<BR>\r\n";

	// 	}
	
	// Create connection
	// $conn = mysql_connect($DB_Server, $DB_Username, $DB_Password);
	
	// // Check connection
	// if (!$conn) {
	// 				die("Connection failed: " . mysqli_connect_error());
	// } else
	// {
	// 			mysql_select_db($DB_DBName ,	$conn);
	// }
	
	// send a query to MySQL server.
	// display an error message if there
	// was some error in the query
	function MySQLQuery($query)
	{
		global $conn;
		//$success= mysql_db_query($GLOBALS["DB_DBName"], $query);
		$success = mysqli_query($conn,$query);

		if(!$success)
		{	
			echo mysql_errno().": ".mysql_error()."<BR>";
			echo "<hr>";
			echo $query;
			echo "<hr>\r\n";
		}
		
		if(substr($query, 0, 6) != "select") // for all queries other than SELECT
		{
			$strLog = $query . " - " . mysql_errno() . " - " . mysql_error();
		//	logToFile($strLog);		// log to file
		}
		
		return $success;
	}
	
	// Pagination Function
function pagination($query,$per_page=10,$page=1,$url='?'){   
 
    $query = "SELECT COUNT(*) as `num` FROM {$query}";
    $row = mysql_fetch_array(mysql_query($query));
    $total = $row['num'];
    $adjacents = "2"; 
     
    $prevlabel = "&lsaquo; Prev";
    $nextlabel = "Next &rsaquo;";
	$lastlabel = "Last &rsaquo;&rsaquo;";
     
    $page = ($page == 0 ? 1 : $page);  
    $start = ($page - 1) * $per_page;                               
     
    $prev = $page - 1;                          
    $next = $page + 1;
     
    $lastpage = ceil($total/$per_page);
     
    $lpm1 = $lastpage - 1; // //last page minus 1
     
    $pagination = "";
    if($lastpage > 1){   
        $pagination .= "<ul class='pagination'>";
        $pagination .= "<li class='page_info'>Page {$page} of {$lastpage}</li>";
             
            if ($page > 1) $pagination.= "<li><a href='{$url}page={$prev}'>{$prevlabel}</a></li>";
             
        if ($lastpage < 7 + ($adjacents * 2)){   
            for ($counter = 1; $counter <= $lastpage; $counter++){
                if ($counter == $page)
                    $pagination.= "<li><a class='current'>{$counter}</a></li>";
                else
                    $pagination.= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";                    
            }
         
        } elseif($lastpage > 5 + ($adjacents * 2)){
             
            if($page < 1 + ($adjacents * 2)) {
                 
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++){
                    if ($counter == $page)
                        $pagination.= "<li><a class='current'>{$counter}</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";                    
                }
                $pagination.= "<li class='dot'>...</li>";
                $pagination.= "<li><a href='{$url}page={$lpm1}'>{$lpm1}</a></li>";
                $pagination.= "<li><a href='{$url}page={$lastpage}'>{$lastpage}</a></li>";  
                     
            } elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
                 
                $pagination.= "<li><a href='{$url}page=1'>1</a></li>";
                $pagination.= "<li><a href='{$url}page=2'>2</a></li>";
                $pagination.= "<li class='dot'>...</li>";
                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
                    if ($counter == $page)
                        $pagination.= "<li><a class='current'>{$counter}</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";                    
                }
                $pagination.= "<li class='dot'>..</li>";
                $pagination.= "<li><a href='{$url}page={$lpm1}'>{$lpm1}</a></li>";
                $pagination.= "<li><a href='{$url}page={$lastpage}'>{$lastpage}</a></li>";      
                 
            } else {
                 
                $pagination.= "<li><a href='{$url}page=1'>1</a></li>";
                $pagination.= "<li><a href='{$url}page=2'>2</a></li>";
                $pagination.= "<li class='dot'>..</li>";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                    if ($counter == $page)
                        $pagination.= "<li><a class='current'>{$counter}</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}page={$counter}'>{$counter}</a></li>";                    
                }
            }
        }
         
            if ($page < $counter - 1) {
				$pagination.= "<li><a href='{$url}page={$next}'>{$nextlabel}</a></li>";
				$pagination.= "<li><a href='{$url}page=$lastpage'>{$lastlabel}</a></li>";
			}
         
        $pagination.= "</ul>";        
    }
     

    return $pagination;
}
	
	// the function returns the assocatied array containing
	// the field name and field value pair for record.
	//
	// strTable:		table name.
	// strCriteria:		where criteria
	//
	function GetRecord($strTable, $strCriteria)
	{
		$strQuery = "select * from $strTable ";

		if(!empty($strCriteria))
			$strQuery .= "where $strCriteria;";
		//echo $strQuery; die;
		$nResult = MySQLQuery($strQuery);

		return mysqli_fetch_array($nResult);
	}
	
	
	function MemberName($ID)
	{
			$strQuery  = "SELECT user_name FROM our_family WHERE user_id = '".(int)$ID."'";
			$nResult = MySQLQuery($strQuery);	
			$rstRow = mysql_fetch_array($nResult);
			$user_name = $rstRow["user_name"];
			return $user_name;
	}
	
	function generateRandomString($length) 
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	function FamilyMember($ID)
	{
			$strQuery  = "SELECT father_id FROM our_family WHERE father_id = '".(int)$ID."'";
			var_dump($strQuery);
			$nResult = MySQLQuery($strQuery);
			while($rstRow = mysql_fetch_array($result)){
				$user_name = $rstRow["user_name"];
			}
			return $user_name;
	}
	
	
	function pr($var)
					{
						echo "<pre>";
							print_r($var);
						echo "</pre>";
					}

// MySQLConnect();
	//echo $_SERVER["SCRIPT_NAME"]."==========".$strLoginScriptPath."---".PHP_SAPI; die;
	if(($_SERVER["SCRIPT_NAME"] != $strLoginScriptPath) && (PHP_SAPI != "cli") && ($conn) )
	{

		//  echo $_SERVER["SCRIPT_NAME"]."==========".$strLoginScriptPath; die;
		$strWhere = "user_login = '" . $_SESSION["strLogin"] . "' and user_password = '" . $_SESSION["strPassword"] . "' and user_type = 0";
		$rstRow = GetRecord("tbluser", $strWhere);
		// if we have not found this user
		// var_dump($rstRow["user_id"]); die;
		if(empty($rstRow["user_id"]))
		{
			header("Location: index?error=1");
			exit;
		}
		else
		{
		
			$_SESSION["nUserId"] = $rstRow["user_id"];
			$_SESSION["strUserName"] = $rstRow["user_name"];
			$_SESSION["strUserAdmin"] = $rstRow["user_admin"];
			$_SESSION["nEnableDisable"] = $rstRow["user_disabled"];
		
		}
	}
	else
	{echo "out"; die;}

?>
