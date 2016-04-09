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
                                    <input type="hidden" name="action" id="action" value="AddPurchaseStock" />
                                       
									<?php TextField("Art #", "article_no", $article_num, "10","2","form-control required"); ?>
                                
                                    <div class="form-group col-lg-2">
                                        <label>Group</label>
                                        <?php ArrayComboBox("arrGroup", $arrGroup, $arrGroup, true, "", "---Select Group---", "required form-control get_group_size", "");?>
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <label>Party</label>
                                        <select class="form-control" id="party" name="party_id">
                                          <option value="">---Select Party---</option>
                                          <?php 
                                            $sql="SELECT * FROM party_name ORDER BY party_id DESC"; //pr($sql);
                                            $result = MySQLQuery($sql);
                                            while($row = mysql_fetch_array($result)) {
                                                //var_dump($row); die;
                                          ?>
                                          <option value="<?php echo $row['party_id']?>"><?php echo $row['party_name']?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                    <?php TextField("Purchase Price", "purchase_price", $purchase_price, "10","2","form-control required number_only"); ?>
                                    <?php TextField("Sale Price", "sale_price", $sale_price, "10","2","form-control required number_only"); ?>
                                    
                                    <div class="clear"></div>
                                    <div class="form-group col-lg-12">
                                    <label class="pull-left hide m-t-10" id="LabelShoesSize">Shoes Sizes</label>
                                    <div id="ShowShoesSizes"> 
                                    </div>
                                    </div>
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
	$(document).ready(function(e) {

		jQuery('#myForm').validate();
		$('input.datepicker_new').Zebra_DatePicker();
        // Numeric only control handler
        jQuery.fn.ForceNumericOnly =
        function()
        {
            return this.each(function()
            {
                $(this).keydown(function(e)
                {
                    var key = e.charCode || e.keyCode || 0;
                    // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                    // home, end, period, and numpad decimal
                    return (
                        key == 8 || 
                        key == 9 ||
                        key == 13 ||
                        key == 46 ||
                        key == 110 ||
                        key == 190 ||
                        (key >= 35 && key <= 40) ||
                        (key >= 48 && key <= 57) ||
                        (key >= 96 && key <= 105));
                });
            });
        };   
        
                
                // Get Group Sizes
                $('.get_group_size').on('change', function() {
                    var currentValue = this.value;
                    var action = "GetAllShoesSizes";
                      jQuery.ajax({
                            type: "POST",
                            url: "action.php",
                            data: {currentValue : currentValue, action : action},
                            cache: false,
                            success: function(response)
                            {
                                $("#ShowShoesSizes").html(response);   
                                // Call Only numbers
                                $(".number_only").ForceNumericOnly(); 
                                $('input.number_only')
                                    .on('focus', function(){
                                        var $this = $(this);
                                        $this.val('');
                                    })
                                $("#LabelShoesSize").removeClass('hide');    
                                 
                            }
                        });
                    });

                $(function() {
                    var availableTags = [
                      "ActionScript",
                      "AppleScript",
                      "Asp",
                      "BASIC",
                      "C",
                      "C++",
                      "Clojure",
                      "COBOL",
                      "ColdFusion",
                      "Erlang",
                      "Fortran",
                      "Groovy",
                      "Haskell",
                      "Java",
                      "JavaScript",
                      "Lisp",
                      "Perl",
                      "PHP",
                      "Python",
                      "Ruby",
                      "Scala",
                      "Scheme"
                    ];
                    $( "#article_num" ).autocomplete({
                      source: availableTags
                    });
                  });

		});

    
	   </script>

</body>

</html>
