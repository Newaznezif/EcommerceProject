<div class="row"><!-- 1 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <ol class="breadcrumb"><!-- breadcrumb Starts -->

            <li class="active">

                <i class="fa fa-dashboard"></i> Dashboard / View Sellers

            </li>

        </ol><!-- breadcrumb Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

    <div class="col-lg-12"><!-- col-lg-12 Starts -->

        <div class="panel panel-default"><!-- panel panel-default Starts -->

            <div class="panel-heading"><!-- panel-heading Starts -->

                <h3 class="panel-title"><!-- panel-title Starts -->

                    <i class="fa fa-users fa-fw"></i> View Sellers

                </h3><!-- panel-title Ends -->

            </div><!-- panel-heading Ends -->

            <div class="panel-body"><!-- panel-body Starts -->

                <div class="table-responsive"><!-- table-responsive Starts -->

                    <table class="table table-hover table-bordered table-striped">
                        <!-- table table-hover table-bordered table-striped Starts -->

                        <thead><!-- thead Starts -->

                            <tr>

                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Action</th>

                            </tr>

                        </thead><!-- thead Ends -->

                        <tbody><!-- tbody Starts -->

                            <?php
                            $i = 0;
                            $get_sellers_query = "SELECT * FROM sellers"; // Assuming 'sellers' is the table where seller data is stored
                            $run_sellers_query = mysqli_query($con, $get_sellers_query);
                            while ($row = mysqli_fetch_assoc($run_sellers_query)) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['country']; ?></td>
                                    <td><?php echo $row['city']; ?></td>
                                    <td><?php echo $row['contact']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td>
                                        <a href="index.php?seller_delete=<?php echo $row['id']; ?>">
                                            <button type="button" class="btn btn-danger">
                                                <i class="fa fa-trash-o"></i> Delete
                                            </button>
                                        </a>

                                      
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody><!-- tbody Ends -->

                    </table><!-- table table-hover table-bordered table-striped Ends -->

                </div><!-- table-responsive Ends -->

            </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->