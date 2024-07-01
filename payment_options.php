

<style>
  /* CSS styles */
  body {
    font-family: Arial, sans-serif;
  }
  .text-center {
    text-align: center;
  }
  .lead {
    font-size: 1.25rem;
    margin-bottom: 1rem;
  }
  button {
    padding: 20px 20px;
    font-size: 3rem;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 20px 10px 30px 40px;
    cursor: pointer;
    text-decoration: none;
    font-weight: bold;
  }
  button:hover {
    background-color: #000;
  }
  .chappa-button {
    background-color: #28a745;
  }
  .chappa-button:hover {
    background-color: #000;
  }
  .payoffline {
    color: black; /* White text */
  }
</style>


<div class="box"><!-- box Starts -->

<?php

$session_email = $_SESSION['customer_email'];

$select_customer = "select * from customers where customer_email='$session_email'";

$run_customer = mysqli_query($con,$select_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];


?>
<br>
<br>
<div>


</div>
<h1 class="text-center">Payment Options For You</h1>

<p class="lead text-center">

 <button ><a href="order.php?c_id=<?php echo $customer_id;  ?> "  >Pay Off line</a></button>

      <!-- Other form fields... -->
      <button type="submit" class="chappa-button" onclick="redirectToMPhp()">Pay with Chappa</button>
    <!-- <button><atype="submit" class="chappa-button" onclick="redirectToMPhp()" href="order.php?c_id=<?php echo $customer_id; ?>">Pay</atype=></button> -->
  <br>


  <a href="payment1.php">
    <!-- Image acting as a clickable icon -->
    <img src="images/paypal.png" alt="PayPal" style="width: 150px; height: auto; margin-Top: 50px;">
  </a>
  
  </div>
  <script>
    function redirectToMPhp() {
      // Redirect to m.php
      window.location.href = "payment1.php";
    }
  </script>

</p>


<?php

$i = 0;


$ip_add = getRealUserIp();

$get_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$get_cart);

while($row_cart = mysqli_fetch_array($run_cart)){

$pro_id = $row_cart['p_id'];

$pro_qty = $row_cart['qty'];

$pro_price = $row_cart['p_price'];

$get_products = "select * from products where product_id='$pro_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$product_title = $row_products['product_title'];

$i++;

?>


<input type="hidden" name="item_name_<?php echo $i; ?>" value="<?php echo $product_title; ?>" >

<input type="hidden" name="item_number_<?php echo $i; ?>" value="<?php echo $i; ?>" >

<input type="hidden" name="amount_<?php echo $i; ?>" value="<?php echo $pro_price; ?>" >

<input type="hidden" name="quantity_<?php echo $i; ?>" value="<?php echo $pro_qty; ?>" >


<?php } ?>

<!-- <input type="image" name="submit" width="50" height="270" src="images/paypal.png "> -->
  

</form><!-- form Ends -->

</center><!-- center Ends -->

</div><!-- box Ends -->


