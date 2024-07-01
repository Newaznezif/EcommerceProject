<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

    if (isset($_GET['seller_delete'])) {
        $delete_id = $_GET['seller_delete'];
        $delete_seller = "DELETE FROM sellers WHERE id='$delete_id'";
        $run_delete = mysqli_query($con, $delete_seller);

        if ($run_delete) {
            echo "<script>alert('Seller Has Been Deleted')</script>";
            echo "<script>window.open('index.php?view_seller','_self')</script>";
        }
    }
}

?>