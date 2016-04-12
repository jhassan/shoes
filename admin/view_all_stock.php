                <?php include_once('top.php');?>

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
                        <h1 class="page-header">View All Stock</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Today Stock
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead class="hide">
                                            <tr>
                                                <th>Article #</th>
                                                <th>Size Code</th>
                                                <th>Credit Shoes</th>    
                                                <th>Group</th>
                                                <th>Party Name</th>
                                                <th>Purchase Price</th>
                                                <th>Sale Price</th>
                                                <th>Date Purchase</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $SQL = "SELECT `tbl_purchase`.* ,tbl_purchase_detail.*
                                            FROM `tbl_purchase` 
                                            INNER JOIN `tbl_purchase_detail` ON `tbl_purchase_detail`.`purchase_id` = `tbl_purchase`.`purchase_id`
                                            ORDER BY `tbl_purchase`.`purchase_id` DESC";			
											$result = MySQLQuery($SQL);
											while($row = mysql_fetch_array($result)) { // ,MYSQL_ASSOC
											$date = date("d-M-Y h:m A",strtotime($row['date_purchase']));
											?>
                                            <tr class="odd gradeX" id="DelID_<?php echo $row['purchase_id'];?>">
                                                <td class="center"><?php echo $row['article_no'];?></td>
                                                <td class="center"><?php echo $row['size_code'];?></td>
                                                <td class="center"><?php echo $row['sh_credit'];?></td>
                                                <td class="center"><?php echo $row['group_id'];?></td>
                                                <td class="left"><?php echo $row['party_id'];?></td>
                                                <td class="center"><?php echo $row['purchase_price'];?></td>
                                                <td class="center"><?php echo $row['sale_price'];?></td>
                                                <td class="center"><?php echo $date;?></td>
                                                <td class="center"><a href="purchase_stock?id=<?php echo $row['purchase_id'];?>"><img height="16" width="16" src="../images/edit.png" alt="Edit"></a>&nbsp;&nbsp;&nbsp;<a id="<?php echo $row['purchase_id'];?>" class='clsDelete'><img data-target="#myModal" data-toggle="modal" src="../images/delete.png" height="16" width="16" alt="Delete"></a></td>
                                            </tr>
                						<?php } ?>
                                        
                                        </tbody>
                                        <?php
                                        $SQL =""; $result =""; $row ="";  
                                        $SQL = "SELECT SUM(`sh_credit`) AS TotalPurchse, SUM(`sale_price`) AS SalePrice, SUM(`purchase_price`) AS PurchasePrice
                                                FROM `tbl_purchase` 
                                                INNER JOIN `tbl_purchase_detail` ON `tbl_purchase_detail`.`purchase_id` = `tbl_purchase`.`purchase_id`";            
                                            $result = MySQLQuery($SQL);
                                            $row = mysql_fetch_array($result);
                                            ?>
                                            <tr class="">
                                                <td class="center">&nbsp;</td>
                                                <td class="center">&nbsp;</td>
                                                <td class="center bld"><?php echo $row['TotalPurchse'];?></td>
                                                <td class="center">&nbsp;</td>
                                                <td class="left">&nbsp;</td>
                                                <td class="center bld"><?php echo $row['PurchasePrice'];?></td>
                                                <td class="center bld"><?php echo $row['SalePrice'];?></td>
                                                <td class="center">&nbsp;</td>
                                                <td class="center"></td>
                                            </tr>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                                
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <!-- /.row -->

                <!-- /.row -->

                <!-- /.row -->
                </div>
                <!-- /#page-wrapper -->

                </div>
                <!-- /#wrapper -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-body">Do you want to delete this record?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" id="DeleteRecord">Delete</button>
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
                </div>
                <input type="hidden" id="currentID" value="" />
                <?php include_once('jquery.php');?>


                <!-- Page-Level Demo Scripts - Tables - Use for reference -->
                <script>
                $(document).ready(function() {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
                // Get Delete Record ID
                jQuery(document).on('click','.clsDelete',function(e){
                var DelID = jQuery(this).attr("id");
                $("#currentID").val(DelID);
                });	

                // Delete Record show Dialog Box
                jQuery(document).on('click','#DeleteRecord',function(e){
                var DelID = $("#currentID").val();
                var action = "DeleteUsers";
                jQuery.ajax({
                	type: "POST",
                	url: "action.php",
                	data: {DelID : DelID, action : action},
                	cache: false,
                	success: function(response)
                	{
                		if(response == "Record Deleted Successfully!")
                		{
                			jQuery("#DelID_"+DelID).hide();	
                			$("#myModal").modal('hide');
                		}
                		 
                	}
                });
                });
                });
                </script>

                </body>

                </html>
