<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Payments

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> View Payments

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-hover table-bordered table-striped"><!-- table table-hover table-bordered table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email Address</th>
<th>Phone Number</th>
<th>Address</th>
<th>Amount</th>
<th>Verify</th>
<th>Delete</th>

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<tr>

<!-- <td>1</td>
<td><?php echo $_POST['firstName']; ?></td>
<td><?php echo $_POST['lastName']; ?></td>
<td><?php echo $_POST['address']; ?></td>
<td><?php echo $_POST['email']; ?></td>
<td><?php echo $_POST['phoneNumber']; ?></td>
<td><?php echo $_POST['amount']; ?></td>

</tr> -->

</tbody><!-- tbody Ends -->
<tbody><!-- tbody Starts -->


<tbody><!-- tbody Starts -->
<?php
$i = 0;
$get_form_submissions = "SELECT * FROM paymentchapa"; // Assuming paymentchapa is the table where your form data is stored
$run_form_submissions = mysqli_query($con, $get_form_submissions);
while ($row = mysqli_fetch_assoc($run_form_submissions)) {
    $i++;
?>
<tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['firstName']; ?></td>
    <td><?php echo $row['lastName']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phoneNumber']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['amount']; ?> ETB</td>


<td>
    <?php if ($row['verificationStatus'] == 'Pending'): ?>
        <a href="verify_payment.php?payment_id=<?php echo $row['id']; ?>">
            <button type="button" class="btn btn-warning">
                <i class="fa fa-clock-o"></i> Pending
            </button>
        </a>
    <?php elseif ($row['verificationStatus'] == 'Verified'): ?>
        <button type="button" class="btn btn-success" disabled>
            <i class="fa fa-check"></i> Verified
        </button>
    <?php endif; ?>
</td>


    <td>
    <a href="index.php?payment1_delete=<?php echo $row['id']; ?>">
        <button type="button" class="btn btn-danger">
            <i class="fa fa-trash-o"></i> Delete
        </button>
    </a>
</td>
    
    <!-- <td style="color: <?php echo $row['payment_status'] === 'Pending' ? 'orange' : 'green'; ?>"><?php echo $row['payment_status']; ?></td> -->
</tr>
<?php } ?>
</tbody><!-- tbody Ends -->





</tbody><!-- tbody Ends -->
</table><!-- table table-hover table-bordered table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->
