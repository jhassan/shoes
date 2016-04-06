<?php include_once('top.php');
	$strRow = "";
	if(!empty($_GET['id']))
	{
	$GetID = mysql_real_escape_string($_GET['id']);	
	$Where = " banner_id = '".(int)$GetID."'";
	$GetRow = GetRecord("tblbanner", $Where);
	$banner_image = $GetRow['banner_image'];
	$banner_status = $GetRow['banner_status'];
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
                    <h1 class="page-header">Add Banners </h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Banners
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="action.php" id="myForm" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="action" id="action" value="AddBanner" />
                                        <input type="hidden" name="nBannerID" id="nBannerID" value="<?php echo $GetID; ?>" />
                                            <div class="form-group m-r-15 m-t-10 col-lg-3 p-l-0">
                                                <label>Upload Banner</label>
                                                <input type="file" name="fileToUpload" id="fileToUpload" class="">
                                            </div>
											<div class="form-group m-r-15 m-t-10 col-lg-3 p-l-0">
                                                <label>Status</label>
                                                <input type="checkbox" name="status" id="status" class="" value="" 
																																																<?php if($banner_status == 1){echo $banner_status="checked";}else{echo $banner_status="";}?>>
                                            </div>                                            
                                            <div class="form-group col-lg-3 m-t-10">
													<?php if(!empty($GetID)) {  ?>
	                                                    <img src="images/<?php echo $banner_image;?>" height="30" width="30" alt="Banner Image">
                                                    <?php } ?>
                                            </div>
                                            <div class="clear"></div>
                                        <div class="form-group col-lg-6">
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
