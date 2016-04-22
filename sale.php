

         <?php include_once('header.php');?>
    <!-- Navigation -->
    <div class=""> 
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
            <input type="text" id="search_id" class='form-control number_only' onclick="EmptyTextField();" onkeyup="autocomplet()">
            <ul id="article_list_id" ></ul>
        </div>        
        </div>
        
        <div class="col-md-4" id="InvoiceDiv">          
          <div class="bs-example" data-example-id="simple-table"> 
          	<form class="form-signin" name="FormID" id="FormID" method="post" onsubmit="return false;">
            <table class="table table table-bordered" width="100%" style="table-layout:fixed; margin-bottom:0px; font-size:12px;"> 
            <tbody class="border"> 
                <tr> 
                	<td colspan="2" style="overflow: hidden; font-weight: bold; font-size: 18px;" class="text-center">Millon Shoes</td> 
                 </tr>
                <tr> 
                    <td colspan="2" style="overflow: hidden;" class="text-center">Tahir Plaza Dahli Gate Multan</td>
                </tr>
                <tr> 
                    <td width="45%" class="col-md-6">Invoice#: 0</td> 
                    <td width="55%" class="col-md-6">Date:<?php echo date("d-M-Y")?></td> 
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
                            <td class="col-md-1 text-center" colspan="2"><input type="text" maxlength="6" name="paid_amount" id="PaidAmount" value="0" class="number_only" onkeyup="GetAmount();" /></td> 
                        </tr> 
                        <tr class="noprint"> 
                            <td class="col-md-8"><strong>Change Amount:</strong></td> 
                            <td class="col-md-1 text-center" colspan="2"><input type="text" maxlength="6" name="change_amount" id="ChangeAmount" value="0" class="number_only" /></td> 
                        </tr>
                        <tr> 
                            <td class="col-md-12" colspan="3">Thanks for choosing Cappellos</td> 
                        </tr>
                        <tr> 
                            <td class="col-md-12" colspan="3">By: (0334)6026706, (0321)6328470</td> 
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

function EmptyTextField()
{
    $('#search_id').val('');
}
// function clickme(id)
// {
//     alert('I am here1'+id);
// }
</script>
<script type="text/javascript">
        $(document).ready(function(e) {
     $('#FormID')[0].reset();
     $('#btnSave').prop('disabled', false);
     $('#PaidAmount').prop('disabled', false);
          
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
    
    // Call Only numbers
    $(".number_only").ForceNumericOnly();
    
    // Keypress add commas in numbers
     $('input.number_only').keyup(function(event){
        // skip for arrow keys
        if(event.which >= 37 && event.which <= 40){
          event.preventDefault();
        }
        var $this = $(this);
        var num = $this.val().replace(/,/gi, "").split("").reverse().join("");
        var num2 = RemoveRougeChar(num.replace(/(.{3})/g,"$1,").split("").reverse().join(""));
        // the following line has been simplified. Revision history contains original.
        $this.val(num2);
      });
        
        $('input.number_only')
        .on('focus', function(){
                var $this = $(this);
                if($this.val() == 0){
                        $this.val('');
                }
        })
        .on('blur', function(){
                var $this = $(this);
                if($this.val() == ''){
                        $this.val(0);
                }
        })
    
            
          
}); // End ready
    function printDiv() {    
    var printContents = document.getElementById('InvoiceDiv').innerHTML;
    var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
    }
        
        // AddProductToSale()
        function AddProductToSale(id,article_no,shoes_price,size_code)
        {
          
          var AlreadyId = $("#Product_"+id+"").closest('tr').attr('id');
          if(AlreadyId)
          {
          // Net Amount
          var CurrentValue = $("#NetAmount").val();
          var NetAmount = parseInt(shoes_price) + parseInt(CurrentValue);
          $("#NetAmount").val(NetAmount);
          //$("#net_amount").val(NetAmount);
          // Quantity
          var Qty = $("#Qty_"+id+"").html();
          var NetQty = parseInt(1) + parseInt(Qty);
          $("#Qty_"+id+"").html(NetQty);
          $("#TotalQty_"+id+"").val(NetQty);
          
          // Price
          var ProductPrice = $("#ProductPrice_"+id+"").val();
          var NetProductPrice = parseInt(shoes_price) + parseInt(ProductPrice);
          $("#ProductPrice_"+id+"").val(NetProductPrice);
          $("#TotalProductPrice_"+id+"").html(NetProductPrice);
          }
          else
          {
          var CurrentValue = $("#NetAmount").val();
          var NetAmount = parseInt(shoes_price) + parseInt(CurrentValue);
          $("#NetAmount").val(NetAmount);
          var str = "";
          //size_code = 36;
          str = "<tr class='count_product' id='Product_"+id+"' onclick='DeleteProduct("+id+","+shoes_price+");' class='cursor'>";
          str += "<td class='col-md-8'>"+article_no+ " (" + size_code +")<input type='hidden' name='product_id[]' value='"+id+"' /><input type='hidden' name='size_code[]' value='"+size_code+"' /><input type='hidden' name='article_no[]' value='"+article_no+"' /></td>"; 
          str += "<td class='col-md-1 text-center'><span id='Qty_"+id+"'>1</span><input id='TotalQty_"+id+"' type='hidden' name='product_qty[]' value='1' /></td>"; 
          str += "<td class='col-md-1 text-center'><input id='ProductPrice_"+id+"' type='hidden' name='shoes_price[]' value='"+shoes_price+"' /><span id='TotalProductPrice_"+id+"'>"+shoes_price+"</span></td>"; 
          str += "</tr>";
          $('#ShowSaleProduct').prepend(str); 
          }
          
        }
        function DeleteProduct(id,shoes_price)
        {
        var ProductPrice = $("#ProductPrice_"+id+"").val(); 
        var CurrentValue = $("#NetAmount").val();
        var NetAmount = parseInt(CurrentValue) - parseInt(ProductPrice);
        $("#NetAmount").val(NetAmount);  
        $("#Product_"+id).remove();
        }
        
        function RemoveRougeChar(convertString)
        {
          if(convertString.substring(0,1) == ",")
          {
            return convertString.substring(1, convertString.length)            
          }
          return convertString;
        }
        function GetAmount()
        {
          var PaidAmount = $("#PaidAmount").val();
          $("#txtPaidAmount").html(PaidAmount);
          PaidAmount = PaidAmount.replace(',', '');
          var NetAmount = $("#NetAmount").val();
            $("#txtNetAmount").html(NetAmount);
          var DiscountAmount = $("#DiscountAmount").val();
          $("#txtDiscountAmount").html(DiscountAmount);
            var TotalAmount = parseInt(PaidAmount) - (parseInt(NetAmount) - parseInt(DiscountAmount));
            TotalAmount = (isNaN(TotalAmount)) ? 0 : TotalAmount;
              $("#ChangeAmount").val(TotalAmount);
              $("#txtChangeAmount").html(TotalAmount);  
        }

    function CheckValidate()
    {
      $('#btnSave').prop('disabled', true);
      var count_product = document.getElementsByClassName('count_product');
      var PaidAmount = document.getElementById('PaidAmount').value;
      if (count_product.length > 0) {
        if(PaidAmount == 0)
        {
          alert('Please add paid amount!');
          return false;   
        }
        else
        {
          var form = $('#FormID');
          var NetAmount = $("#NetAmount").val();
          var DiscountAmount = $("#DiscountAmount").val();
          //var product_price = $("#DiscountAmount").val();
          var product_id = $("input[name='product_id[]']").map(function(){return $(this).val();}).get();
          var shoes_price = $("input[name='shoes_price[]']").map(function(){return $(this).val();}).get();
          var product_qty = $("input[name='product_qty[]']").map(function(){return $(this).val();}).get();
		  var size_code = $("input[name='size_code[]']").map(function(){return $(this).val();}).get();
		  var article_no = $("input[name='article_no[]']").map(function(){return $(this).val();}).get();
          $.ajax( {
              type: "GET",
              url : 'action.php?action=AddSaleDetails',
              data: { 'net_amount':NetAmount, 'discount_amount': DiscountAmount, 'product_id': product_id, 'shoes_price': shoes_price, 'product_qty': product_qty, 'size_code': size_code, 'article_no': article_no},
              success: function( response ) {
                if(response == 'done')
                {
                  //printDiv();
                  //window.print();
                  window.location.href = "/sale";
                  return false;
                }
                //alert( response ); return false;
              }
            } );    
          
        }
      }
      else
      {
      alert('Please select any flavours!');
      return false;
      }
    }

    function searchKeyPress(e)
    {
        // look for window.event in case event isn't passed in
        e = e || window.event;
        if (e.keyCode == 13)
        {
            $('#btnSave').prop('disabled', true);
            $('#PaidAmount').prop('disabled', true);
            CheckValidate();
            return false;
        }
        return true;
    }
        
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