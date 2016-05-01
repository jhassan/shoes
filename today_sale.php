

         <?php include_once('header.php');
         // Get invoice id
         $created_at = date("Y-m-d");
          $sql_invoice = "SELECT MAX(`invoice_id`)+1 AS invoice_id FROM `tbl_sale` where created_at = '".$created_at."'";
          $row_invoice_id = mysqli_query($conn,$sql_invoice);
          $array = mysqli_fetch_array($row_invoice_id);
          $last_invoice_id = $array['invoice_id'];
         ?>
    

    <!-- Page Content -->
<div class="container">
  <div class="table-responsive">
          <table class="table table-striped m-b-0">
              <thead>
                <tr>
                  <th>Product Price</th>
                  <th>Product Quantity</th>
                  <th>Product Name</th>
                  <th>Invoice #</th>
                  <th>Date</th>
                  <th>Employee</th>
                </tr>
              </thead>
              <tbody>
              
                                  <tr>
                  <td>180</td>
                  <td>1</td>
                  <td>Chocolate Hersheys</td>
                  <td>MUL-1</td>
                  <td>27-Apr-2016 16:56 PM</td>
                  <td>Kashif</td>
                </tr>
                                                <tr>
                  <td>180</td>
                  <td>1</td>
                  <td>Chocolate with Caremal</td>
                  <td>MUL-1</td>
                  <td>27-Apr-2016 16:56 PM</td>
                  <td>Kashif</td>
                </tr>
                                              </tbody>
            </table>
                        <table class="table table-striped m-b-0">
              <thead>
                <tr>
                  <td width="146" style="font-weight:bold;">0/20</td>
                  <td width="112" style="font-weight:bold;">0/100</td>
                  <td width="91" style="font-weight:bold;">0/150</td>
                  <td width="105" style="font-weight:bold;">2/180</td>
                  <td width="198" style="font-weight:bold;">0/200</td>
                  <td width="198" style="font-weight:bold;">0/220</td>
                  <td width="198" style="font-weight:bold;">0/40</td>
                  <td width="160" style="font-weight:bold;">0/70</td>
                  <td width="1">&nbsp;</td>
                  <td width="36">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" style="width:200px; font-weight:bold;">Discount Amount : 0</td>
                  <td colspan="2" style="width:200px; font-weight:bold;">Total Quantity : 2</td>
                  <td colspan="2" style="width:200px; font-weight:bold;">Total Sale : 360</td>
                  <td style="width:200px; font-weight:bold;"></td>
                  <td style="width:162px; font-weight:bold;"></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </thead>
           </table>
            
          </div>


</div>
<?php include_once('footer.php'); ?>