

         <?php include_once('header.php');?>
    <!-- Navigation -->
    <div class="row "> 
        <div class="bs-example" data-example-id="inverted-navbar">
            <nav class="navbar navbar-inverse">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/sale">Shoes</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="">Today Sale</a>
                    </li>
                    <li>
                        <a href="">Return Invoice</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
    </div>
    

    <!-- Page Content -->
            <div class="container">

        <!-- Page Heading -->
        
        <!-- /.row -->
        <div class="row" style="min-height:200px;">
        <div class="col-md-8 noprint" style="overflow: auto; max-height: 500px;">
        <div class="col-md-6">
            <label>Select any shoes!</label>
            <input type="text" id="search_id" class='form-control' onkeyup="autocomplet()">
            <ul id="article_list_id" ></ul>
        </div>        
        </div>
        
        <div class="col-md-4" id="InvoiceDiv">          
            <div class="text-center"><img height="35" src="http://sales.pakcappellos.com/img/logo1.png" alt="Cappellos" /></div>
          <div class="bs-example" data-example-id="simple-table"> 
          	<form class="form-signin" id="FormID" method="post" onsubmit="return false;">
        		<input type="hidden" name="_token" value="AV1SzkvuV6InJs1izXms9rsQ8P85odNu9mTxTc3A" />
            <table class="table table table-bordered" width="100%" style="table-layout:fixed; margin-bottom:0px; font-size:12px;"> 
            <tbody class="border"> 
                <tr> 
                	<td colspan="2" style="overflow: hidden;" class="text-center">Fried Roll Ice Cream</td> 
                 </tr>
                <tr> 
                    <td colspan="2" style="overflow: hidden;" class="text-center">3rd Floor Unitd Mall Multan</td>
                </tr>
                <tr> 
                    <td width="45%" class="col-md-6">Invoice#: MUL-47</td> 
                    <td width="55%" class="col-md-6">Date:13-Apr-2016</td> 
                </tr> 
              </tbody>
            </table>
            <table class="table table table-bordered" style="font-size:12px; border-top-color:#fff;"> 
            <thead class="border"> 
                <tr> 
                    <th class="col-md-4">Description</th> 
                    <th class="col-md-1">Qty</th> 
                    <th class="col-md-1">Amount</th> 
                </tr> 
                </thead> 
                    <tbody class="border" id="ShowSaleProduct"> 
                        <tr> 
                            <td class="col-md-2">Discount:<span id="txtDiscountAmount" class="p-l-10">0</span></td> 
                            <td class="col-md-2" colspan="2">Net Amount:<span id="txtNetAmount" class="p-l-10">0</span></td> 
                        </tr>
                        <tr> 
                            <td class="col-md-2">Paid:<span id="txtPaidAmount" class="p-l-10">0</span></td> 
                            <td class="col-md-2" colspan="2">Change:<span id="txtChangeAmount" class="p-l-10">0</span></td> 
                        </tr>
                        <tr class="noprint"> 
                            <td class="col-md-8 noprint"><strong>Discount Amount:</strong></td> 
                            <td class="col-md-1 noprint text-center" colspan="2"><input type="text" maxlength="3" name="discount_amount" id="DiscountAmount" value="0" class="number_only noprint" /></td> 
                        </tr>
                        <tr class="noprint"> 
                            <td class="col-md-8"><strong>Net Amount:</strong></td> 
                            <td class="col-md-1 text-center" colspan="2"><input maxlength="6" type="text" name="net_amount" id="NetAmount" value="0" class="number_only" /></td> 
                        </tr>
                        <tr class="noprint"> 
                            <td class="col-md-8"><strong>Paid Amount:</strong></td> 
                            <td class="col-md-1 text-center" colspan="2"><input type="text" maxlength="6" maxlength="6" name="paid_amount" id="PaidAmount" value="0" class="number_only" onkeyup="GetAmount();" /></td> 
                        </tr> 
                        <tr class="noprint"> 
                            <td class="col-md-8"><strong>Change Amount:</strong></td> 
                            <td class="col-md-1 text-center" colspan="2"><input type="text" maxlength="6" maxlength="6" name="ChangeAmount" id="ChangeAmount" value="0" class="number_only" /></td> 
                        </tr>
                        <tr> 
                            <td class="col-md-12" colspan="3">Thanks for choosing Cappellos</td> 
                        </tr>
                        <tr> 
                            <td class="col-md-12" colspan="3">Developed by: (0334)6026706, (0321)6328470</td> 
                        </tr> 
                        <tr class="noprint"> 
                            <td class="col-md-12" colspan="3" align="right"><button type="button" onclick="return CheckValidate();" class="btn btn-success">Save and Print</button></td> 
                        </tr>   <!--onclick="printDiv();"-->
                    </tbody> 
            </table> 
            </form>
        </div>  
        </div>
      </div>
    
    </div>
</body>

<script type="text/javascript">
// autocomplet : this function will be executed every time we change the text
function autocomplet() {
    var min_length = 0; // min caracters to display the autocomplete
    var keyword = $('#search_id').val();
    if (keyword.length >= min_length) {
        $.ajax({
            url: 'action.php?action=GetAllShoes',
            type: 'POST',
            data: {keyword:keyword},
            success:function(data){
               // console.log(data); return false;
                $('#article_list_id').show();
                $('#article_list_id').html(data);
            }
        });
    } else {
        $('#article_list_id').hide();
    }
}

// set_item : this function will be executed when we select an item
function set_item(item) {
    // change input value
    $('#search_id').val(item);
    // hide proposition list
    $('#article_list_id').hide();
}

// function clickme(id)
// {
//     alert('I am here1'+id);
// }
</script>
<style type="text/css">
.input_container1 {
    height: 30px;
    float: left;
}
.input_container1 input {
    height: 20px;
    width: 200px;
    padding: 3px;
    border: 1px solid #cccccc;
    border-radius: 0;
}
.input_container1 ul {
    width: 206px;
    border: 1px solid #eaeaea;
    position: absolute;
    z-index: 9;
    background: #f3f3f3;
    list-style: none;
}
.input_container1 ul li {
    padding: 2px;
}
.input_container1 ul li:hover {
    background: #eaeaea;
}
#article_list_id {
    display: none;
}
</style>

</html>