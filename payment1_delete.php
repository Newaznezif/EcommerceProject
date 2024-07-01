<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

    if (isset($_GET['payment1_delete'])) {
        $delete_id = $_GET['payment1_delete'];
        $delete_payment = "DELETE FROM paymentchapa WHERE id='$delete_id'";
        $run_delete = mysqli_query($con, $delete_payment);

        if ($run_delete) {
            echo "<script>alert('Payment Has Been Deleted')</script>";
            echo "<script>window.open('index.php?view_paymentchapa','_self')</script>";
        }
    }
}

?>



