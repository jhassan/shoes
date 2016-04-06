<?php include_once('top.php');
	$strRow = "";
	if(!empty($_GET['id']))
	{
	$GetID = mysql_real_escape_string($_GET['id']);	
	$Where = " user_id = '".(int)$GetID."'";
	$GetRow = GetRecord("our_family", $Where);
	$user_name = $GetRow['user_name'];
	$user_type = $GetRow['user_type'];
	$dob = $GetRow['dob'];
	$death_date = $GetRow['death_date'];
	$father_id = $GetRow['father_id'];
	$mother_id = $GetRow['mother_id'];
	$spous_id = $GetRow['spous_id'];
	$user_image = $GetRow['user_image'];
	$user_order =  $GetRow['user_order'];
	}
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <?php include_once('header.php');?>    

        <?php include_once('leftsidebar.php');?>     
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Shoes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Shoes...
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="action.php" id="myForm" method="post">
                                    <input type="hidden" name="action" id="action" value="AddUser" />
                                     <input type="hidden" name="nUserID" id="nUserID" value="<?php echo $GetID; ?>" />
                                        
									<?php TextField("Art #", "article_num", $article_num, "50","3","form-control required"); ?>
                                
                                    <div class="form-group col-lg-3">
                                        <label>Group</label>
                                        <?php ArrayComboBox("arrGroup", $arrGroup, $arrGroup, true, "", "---Select Group---", "required form-control", "");?>
                                    </div>
                                    <?php TextField("Sale Price", "sale_price", $sale_price, "50","3","form-control required"); ?>
                                    <?php TextField("Purchase Price", "purchase_price", $purchase_price, "50","3","form-control required"); ?>
                                        <div class="clear"></div>
                                        <div class="form-group col-lg-12">
                                        <button type="submit" class="btn btn-default m-t-10">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include_once('jquery.php');?>
    <script type="text/javascript" src="../js/zebra_datepicker.js"></script>
    <link rel="stylesheet" href="../dist/css/default.css" type="text/css">
    <script type="text/javascript">
	jQuery(function (){
		jQuery('#myForm').validate();
		$('input.datepicker_new').Zebra_DatePicker();
		});
	   </script>

</body>

</html>
