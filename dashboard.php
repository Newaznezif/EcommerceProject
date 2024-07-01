<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<!-- <h1 class="page-header">Dashboard</h1> -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_products; ?> </div>

<div>Products</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_products">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-green"><!-- panel panel-green Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-comments fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_customers; ?> </div>

<div>Customers</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_customers">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-green Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-shopping-cart fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_p_categories; ?> </div>

<div>Products Categories</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_p_cats">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-yellow Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-red"><!-- panel panel-red Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-support fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_total_orders; ?> </div>

<div>Orders</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_orders">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->

<div class="row">
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

        <div class="panel panel-success"><!-- panel panel-red Starts -->
        
        <div class="panel-heading"><!-- panel-heading Starts -->
        
        <div class="row"><!-- panel-heading row Starts -->
        
        <div class="col-xs-3"><!-- col-xs-3 Starts -->
        <div style="font-size: 3em;">BIRR</div>
      
        </div><!-- col-xs-3 Ends -->
        
        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
        
        <div class="huge"> <?php echo $count_total_earnings ?> </div>
        
        <div>Earnings</div>
        
        </div><!-- col-xs-9 text-right Ends -->
        
        </div><!-- panel-heading row Ends -->
        
        </div><!-- panel-heading Ends -->
        
        <a href="index.php?view_orders">
        
        <div class="panel-footer"><!-- panel-footer Starts -->
        
        <span class="pull-left"> View Details </span>
        
        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
        
        <div class="clearfix"></div>
        
        </div><!-- panel-footer Ends -->
        
        </a>
        
        </div><!-- panel panel-red Ends -->
        
        </div><!-- col-lg-3 col-md-6 Ends -->


        <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-warning"><!-- panel panel-red Starts -->
            
            <div class="panel-heading"><!-- panel-heading Starts -->
            
            <div class="row"><!-- panel-heading row Starts -->
            
            <div class="col-xs-3"><!-- col-xs-3 Starts -->
            
            <i class="fa fa-spinner fa-5x"> </i>
            
            </div><!-- col-xs-3 Ends -->
            
            <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
            
            <div class="huge"> <?php echo $count_pending_orders ?> </div>
            
            <div>Pending Orders</div>
            
            </div><!-- col-xs-9 text-right Ends -->
            
            </div><!-- panel-heading row Ends -->
            
            </div><!-- panel-heading Ends -->
            
            <a href="index.php?view_orders">
            
            <div class="panel-footer"><!-- panel-footer Starts -->
            
            <span class="pull-left"> View Details </span>
            
            <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
            
            <div class="clearfix"></div>
            
            </div><!-- panel-footer Ends -->
            
            </a>
            
            </div><!-- panel panel-red Ends -->
            
            </div><!-- col-lg-3 col-md-6 Ends -->



            <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

                <div class="panel panel-info"><!-- panel panel-red Starts -->
                
                <div class="panel-heading"><!-- panel-heading Starts -->
                
                <div class="row"><!-- panel-heading row Starts -->
                
                <div class="col-xs-3"><!-- col-xs-3 Starts -->
                
                <i class="fa fa-check fa-5x"> </i>
                
                </div><!-- col-xs-3 Ends -->
                
                <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                
                <div class="huge"> <?php echo $count_completed_orders ?> </div>
                
                <div>Completed Orders</div>
                
                </div><!-- col-xs-9 text-right Ends -->
                
                </div><!-- panel-heading row Ends -->
                
                </div><!-- panel-heading Ends -->
                
                <a href="index.php?view_orders">
                
                <div class="panel-footer"><!-- panel-footer Starts -->
                
                <span class="pull-left"> View Details </span>
                
                <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                
                <div class="clearfix"></div>
                
                </div><!-- panel-footer Ends -->
                
                </a>
                
                </div><!-- panel panel-red Ends -->
                
                </div><!-- col-lg-3 col-md-6 Ends -->



                <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

                    <div class="panel panel-danger"><!-- panel panel-red Starts -->
                    
                    <div class="panel-heading"><!-- panel-heading Starts -->
                    
                    <div class="row"><!-- panel-heading row Starts -->
                    
                    <div class="col-xs-3"><!-- col-xs-3 Starts -->
                    
                    <i class="fa fa-percent fa-5x"> </i>
                    
                    </div><!-- col-xs-3 Ends -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
                    
                    <div class="huge"> <?php echo $count_coupons; ?> </div>
                    
                    <div>Total Coupons</div>
                    
                    </div><!-- col-xs-9 text-right Ends -->
                    
                    </div><!-- panel-heading row Ends -->
                    
                    </div><!-- panel-heading Ends -->
                    
                    <a href="index.php?view_orders">
                    
                    <div class="panel-footer"><!-- panel-footer Starts -->
                    
                    <span class="pull-left"> View Details </span>
                    
                    <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                    
                    <div class="clearfix"></div>
                    
                    </div><!-- panel-footer Ends -->
                    
                    </a>
                    
                    </div><!-- panel panel-red Ends -->
                    
                    </div><!-- col-lg-3 col-md-6 Ends -->
</div>

<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> New Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<style>
  thead th {
    background-color: #F8F9FA;
    color: #212529;
    font-weight: bold;
    text-transform: uppercase;
    padding: 12px;
    border-bottom: 2px solid #dee2e6;
    cursor: pointer;
  }

  thead th:hover {
    background-color: #E9ECEF;
  }
</style>

<thead><!-- thead Starts -->
  <tr>
    <th>Order #</th>
    <th>Customer</th>
    <th>Invoice No</th>
    <th>Product ID</th>
    <th>Qty</th>
    <th>Size</th>
    <th>Status</th>
  </tr>
</thead><!-- thead Ends -->

<?php

$i = 0;

$get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";
$run_order = mysqli_query($con,$get_order);

while($row_order=mysqli_fetch_array($run_order)){


$order_id = $row_order['order_id'];

$c_id = $row_order['customer_id'];

$invoice_no = $row_order['invoice_no'];

$product_id = $row_order['product_id'];

$qty = $row_order['qty'];

$size = $row_order['size'];

$order_status = $row_order['order_status'];


$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td>
<?php

$get_customer = "select * from customers where customer_id='$c_id'";
$run_customer = mysqli_query($con,$get_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_email = $row_customer['customer_email'];
echo $customer_email;
?>
</td>

<td><?php echo $invoice_no; ?></td>
<td><?php echo $product_id; ?></td>
<td><?php echo $qty; ?></td>
<td><?php echo $size; ?></td>
<td>
<?php
if($order_status=='pending'){

echo $order_status='pending';

}
else {

echo $order_status='Complete';

}

?>
</td>

</tr>

<?php } ?>

</tbody><!-- tbody Ends -->


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?view_orders" >

View All Orders <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->


</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->

<div class="col-md-4"><!-- col-md-4 Starts -->

<div class="panel"><!-- panel Starts -->



</div><!-- panel Ends -->

</div><!-- col-md-4 Ends -->

</div><!-- 3 row Ends -->

<!-- Add Seller Management Section -->
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-users fa-fw"></i> Sellers Management</h3>
        </div>
        <div class="panel-body">
            <!-- Display Seller Information -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Business License</th>
                            <th>Action</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Fetch seller data from the database
                            $sql = "SELECT * FROM sellers";
                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Store the image and business license file names in variables
                                    $seller_image = $row["image"];
                                    $business_license = $row["business_license"];

                                    echo "<tr>";
                                    echo "<td>" . $row["id"] . "</td>";
                                    echo "<td>" . $row["name"] . "</td>";
                                    echo "<td>" . $row["email"] . "</td>";
                                    echo "<td>" . $row["country"] . "</td>";
                                    echo "<td>" . $row["city"] . "</td>";
                                    echo "<td>" . $row["contact"] . "</td>";
                                    echo "<td>" . $row["address"] . "</td>";
                                    echo "<td>" . ($row["verified"] ? "Verified" : "Not Verified") . "</td>";
                                    echo "<td>";
                                    // Display seller image using the variable
                                    echo "<img src='../Seller/seller_images/" . $seller_image . "' width='50' height='50'>";
                                    echo "</td>";
                                    echo "<td>";
                                    // Display business license file using the variable
                            
   if (!empty($business_license)) {
                                    echo "<a href='../Seller/business_license/" . $business_license . "' download> <button>Download</button>   </a>";
                                } else {
                                    echo "No business license uploaded";
                                }

                                

                                echo "</td>";
                                    echo "<td>";
                                    // Add action buttons for seller verification
                                    if ($row["verified"]) {
                                        echo "<button class='btn btn-success btn-sm' >Verified</button>";
                                    } else {
                                        echo "<button class='btn btn-warning btn-sm verify-button' data-seller-id='" . $row["id"] . "'>Verify</button>";
                                    }

                                    echo "</td>";
                                    echo "<td>";

                                    // Add delete button
                                    echo "<a href='index.php?seller_delete=" . $row['id'] . "'>
                                  <button type='button' class='btn btn-danger btn-sm'>
                                      <i class='fa fa-trash-o'></i> Delete
                                  </button>
                              </a>";

                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='12'>No sellers found.</td></tr>";
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
 $(document).ready(function () {
    $('.verify-button').click(function () {
        var button = $(this); // Store the button element
        var sellerId = button.data('seller-id');
        $.ajax({
            url: 'verify_seller.php',
            method: 'POST',
            data: {seller_id: sellerId},
            success: function (response) {
                // Update button style and show success message
                button.toggleClass('btn-warning btn-success').html(response);
                // Update status dynamically
                button.closest('tr').find('.status').text(response);
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred while verifying the seller.');
            }
        });
    });
});

</script>

</tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<?php } ?>


<!-- Add this JavaScript code at the bottom of your HTML file -->
<!-- <script>
    // JavaScript to handle delete button click
    $(document).ready(function(){
        $('.delete-button').click(function(){
            // Get the seller ID associated with the delete button
            var sellerId = $(this).data('seller-id');
            // Confirm deletion
            if(confirm("Are you sure you want to delete this seller?")){
                // Send an AJAX request to delete the seller
                $.ajax({
                    url: 'delete_seller.php', // Update the URL with your PHP script for deleting the seller
                    type: 'post',
                    data: {id: sellerId},
                    success:function(response){
                        // Refresh the page after deletion
                        location.reload();
                    }
                });
            }
        });
    });
</script> -->