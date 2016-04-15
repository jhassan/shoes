<script type="text/javascript">
    $(document).ready(function() {
        var isAuth = "1";
		if (isAuth != 1) 
		{
			window.location = "/";
		}

		$("#PaidAmount").keypress(function(e) {
		    if(e.which == 13) {
		        //alert('You pressed enter!');
		        CheckValidate();
		    }
		   // return false;
		});
    });
</script>
    <script type="text/javascript">
				$(document).ready(function(e) {
     $('#FormID')[0].reset();
					
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
				function AddProductToSale(id,product_name,product_price)
				{
					
					var AlreadyId = $("#Product_"+id+"").closest('tr').attr('id');
					if(AlreadyId)
					{
					// Net Amount
					var CurrentValue = $("#NetAmount").val();
					var NetAmount = parseInt(product_price) + parseInt(CurrentValue);
					$("#NetAmount").val(NetAmount);
					//$("#net_amount").val(NetAmount);
					// Quantity
					var Qty = $("#Qty_"+id+"").html();
					var NetQty = parseInt(1) + parseInt(Qty);
					$("#Qty_"+id+"").html(NetQty);
					$("#TotalQty_"+id+"").val(NetQty);
					
					// Price
					var ProductPrice = $("#ProductPrice_"+id+"").val();
					var NetProductPrice = parseInt(product_price) + parseInt(ProductPrice);
					$("#ProductPrice_"+id+"").val(NetProductPrice);
					$("#TotalProductPrice_"+id+"").html(NetProductPrice);
					}
					else
					{
					var CurrentValue = $("#NetAmount").val();
					var NetAmount = parseInt(product_price) + parseInt(CurrentValue);
					$("#NetAmount").val(NetAmount);
					var str = "";
					str = "<tr class='count_product' id='Product_"+id+"' onclick='DeleteProduct("+id+","+product_price+");' class='cursor'>";
					str += "<td class='col-md-8'>"+product_name+"<input type='hidden' name='product_id[]' value='"+id+"' /></td>"; 
					str += "<td class='col-md-1 text-center'><span id='Qty_"+id+"'>1</span><input id='TotalQty_"+id+"' type='hidden' name='product_qty[]' value='1' /></td>"; 
					str += "<td class='col-md-1 text-center'><input id='ProductPrice_"+id+"' type='hidden' name='product_price[]' value='"+product_price+"' /><span id='TotalProductPrice_"+id+"'>"+product_price+"</span></td>"; 
					str += "</tr>";
					$('#ShowSaleProduct').prepend(str); 
					}
					
				}
				function DeleteProduct(id,product_price)
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
					var product_price = $("input[name='product_price[]']").map(function(){return $(this).val();}).get();
					var product_qty = $("input[name='product_qty[]']").map(function(){return $(this).val();}).get();
					$.ajax( {
				      type: "GET",
				      url : 'sale_product',
				      data: { 'net_amount':NetAmount, 'discount_amount': DiscountAmount, 'product_id': product_id, 'product_price': product_price, 'product_qty': product_qty},
				      success: function( response ) {
				      	if(response == 'done')
				      	{
				      		//printDiv();
				      		window.print();
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
				
</script>