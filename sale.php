

         <?php    include_once('header.php');?>
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
          <p>
          	         	<button type="button" onclick="AddProductToSale(18, 'Almond',150);" title="Almond" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Almond</button>
 	       	         	<button type="button" onclick="AddProductToSale(10, 'Black Berry',150);" title="Black Berry" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Black Berry</button>
 	       	         	<button type="button" onclick="AddProductToSale(5, 'Blue Berry',150);" title="Blue Berry" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Blue Berry</button>
 	       	         	<button type="button" onclick="AddProductToSale(24, 'Brown Sugar With Honey',150);" title="Brown Sugar With Honey" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Brown Sugar With Honey</button>
 	       	         	<button type="button" onclick="AddProductToSale(13, 'Cadbury Chocolate',150);" title="Cadbury Chocolate" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Cadbury Chocolate</button>
 	       	         	<button type="button" onclick="AddProductToSale(46, 'Capi Rose',150);" title="Capi Rose" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Capi Rose</button>
 	       	         	<button type="button" onclick="AddProductToSale(38, 'Cappuccino',180);" title="Cappuccino" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Cappuccino</button>
 	       	         	<button type="button" onclick="AddProductToSale(23, 'Caremal Crunch',150);" title="Caremal Crunch" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Caremal Crunch</button>
 	       	         	<button type="button" onclick="AddProductToSale(31, 'Carrot',150);" title="Carrot" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Carrot</button>
 	       	         	<button type="button" onclick="AddProductToSale(22, 'Chashew',150);" title="Chashew" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Chashew</button>
 	       	         	<button type="button" onclick="AddProductToSale(47, 'Chocolate brownie',220);" title="Chocolate brownie" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Chocolate brownie</button>
 	       	         	<button type="button" onclick="AddProductToSale(34, 'Chocolate Hersheys',180);" title="Chocolate Hersheys" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Chocolate Hersheys</button>
 	       	         	<button type="button" onclick="AddProductToSale(14, 'Chocolate Lovers',180);" title="Chocolate Lovers" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Chocolate Lovers</button>
 	       	         	<button type="button" onclick="AddProductToSale(15, 'Chocolate with Almond',180);" title="Chocolate with Almond" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Chocolate with Almond</button>
 	       	         	<button type="button" onclick="AddProductToSale(33, 'Chocolate with Caremal',180);" title="Chocolate with Caremal" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Chocolate with Caremal</button>
 	       	         	<button type="button" onclick="AddProductToSale(17, 'Chocolate with Coconut',180);" title="Chocolate with Coconut" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Chocolate with Coconut</button>
 	       	         	<button type="button" onclick="AddProductToSale(36, 'Chocolate with Dry Fruit Mix',200);" title="Chocolate with Dry Fruit Mix" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Chocolate with Dry Fruit Mix</button>
 	       	         	<button type="button" onclick="AddProductToSale(35, 'Chocolate With Peanut',180);" title="Chocolate With Peanut" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Chocolate With Peanut</button>
 	       	         	<button type="button" onclick="AddProductToSale(16, 'Chocolate with Walnut',180);" title="Chocolate with Walnut" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Chocolate with Walnut</button>
 	       	         	<button type="button" onclick="AddProductToSale(9, 'Coconut',150);" title="Coconut" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Coconut</button>
 	       	         	<button type="button" onclick="AddProductToSale(25, 'Coffee Lovers',150);" title="Coffee Lovers" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Coffee Lovers</button>
 	       	         	<button type="button" onclick="AddProductToSale(37, 'Dates',150);" title="Dates" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Dates</button>
 	       	         	<button type="button" onclick="AddProductToSale(30, 'Dry Fruit Mix',180);" title="Dry Fruit Mix" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Dry Fruit Mix</button>
 	       	         	<button type="button" onclick="AddProductToSale(11, 'Jack Fruit',150);" title="Jack Fruit" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Jack Fruit</button>
 	       	         	<button type="button" onclick="AddProductToSale(42, 'Kinder Joy',100);" title="Kinder Joy" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Kinder Joy</button>
 	       	         	<button type="button" onclick="AddProductToSale(45, 'Kit kat',220);" title="Kit kat" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Kit kat</button>
 	       	         	<button type="button" onclick="AddProductToSale(29, 'Kulfa',150);" title="Kulfa" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Kulfa</button>
 	       	         	<button type="button" onclick="AddProductToSale(12, 'Lychees',150);" title="Lychees" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Lychees</button>
 	       	         	<button type="button" onclick="AddProductToSale(3, 'Mango',150);" title="Mango" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Mango</button>
 	       	         	<button type="button" onclick="AddProductToSale(27, 'Milo',150);" title="Milo" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Milo</button>
 	       	         	<button type="button" onclick="AddProductToSale(49, 'Nestle water 1500 ML',70);" title="Nestle water 1500 ML" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Nestle water 1500 ML</button>
 	       	         	<button type="button" onclick="AddProductToSale(48, 'Nestle water 500ML',40);" title="Nestle water 500ML" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Nestle water 500ML</button>
 	       	         	<button type="button" onclick="AddProductToSale(41, 'Nutella',200);" title="Nutella" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Nutella</button>
 	       	         	<button type="button" onclick="AddProductToSale(26, 'Oreo Fun',150);" title="Oreo Fun" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Oreo Fun</button>
 	       	         	<button type="button" onclick="AddProductToSale(39, 'Oreo Orignal',180);" title="Oreo Orignal" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Oreo Orignal</button>
 	       	         	<button type="button" onclick="AddProductToSale(8, 'Peach',150);" title="Peach" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Peach</button>
 	       	         	<button type="button" onclick="AddProductToSale(20, 'Peanut',150);" title="Peanut" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Peanut</button>
 	       	         	<button type="button" onclick="AddProductToSale(44, 'Peanut Butter',220);" title="Peanut Butter" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Peanut Butter</button>
 	       	         	<button type="button" onclick="AddProductToSale(4, 'Pine Apple',150);" title="Pine Apple" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Pine Apple</button>
 	       	         	<button type="button" onclick="AddProductToSale(19, 'Pistacio',150);" title="Pistacio" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Pistacio</button>
 	       	         	<button type="button" onclick="AddProductToSale(7, 'Raspberry',150);" title="Raspberry" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Raspberry</button>
 	       	         	<button type="button" onclick="AddProductToSale(6, 'Red Cherry',150);" title="Red Cherry" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Red Cherry</button>
 	       	         	<button type="button" onclick="AddProductToSale(2, 'Strawberry',150);" title="Strawberry" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Strawberry</button>
 	       	         	<button type="button" onclick="AddProductToSale(32, 'Sweet Corns',150);" title="Sweet Corns" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Sweet Corns</button>
 	       	         	<button type="button" onclick="AddProductToSale(1, 'Tooti Fruti',180);" title="Tooti Fruti" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Tooti Fruti</button>
 	       	         	<button type="button" onclick="AddProductToSale(43, 'Topping',20);" title="Topping" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Topping</button>
 	       	         	<button type="button" onclick="AddProductToSale(28, 'Vanila With Chocolate Chip Cookies',150);" title="Vanila With Chocolate Chip Cookies" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Vanila With Chocolate Chip Cookies</button>
 	       	         	<button type="button" onclick="AddProductToSale(40, 'Vanilla',150);" title="Vanilla" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Vanilla</button>
 	       	         	<button type="button" onclick="AddProductToSale(21, 'Walnut',150);" title="Walnut" style="text-align:left; font-size: 14px; font-weight: bold;" class="col-md-3 m-l-5 m-t-10 btn btn-success btn-lg">Walnut</button>
 	                 
        </p>
        </div>
        <div class="col-md-4" id="InvoiceDiv">          <div class="text-center"><img height="35" src="http://sales.pakcappellos.com/img/logo1.png" alt="Cappellos" /></div>
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

</html>