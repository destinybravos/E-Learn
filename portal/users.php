<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- External Files/CSS -->
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="../fa/css/all.css">
    <link rel="stylesheet" href="css/dashboard_style.css">
    <link rel="icon" href="../img/elearning.png">
</head>
<body>
<?php 
 $page_tag = '<i class="fa fa-users"></i> Users';
?>
<?php include_once 'nav.php' ?>

<div id="site_content" class="<?php echo $slim_status ?>">
<?php
    include_once 'top_nav.php';
?>

    <div id="page_content">
        <div class="alert alert-info fade mb-3"> </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>
                                <div style="float:right;">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Search Users" type="search" name="srch_users" id="srch_users" style="height:30px; max-width:150px;">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <i class="fa fa-users"></i> Registered Users
                            </strong>
                        </div>
                        <div class="card-body" style="padding:0;">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr class="bg-default">
                                        <th>Fulname</th>
                                        <th>School</th>
                                        <th>User Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>

                                    <tbody id="userdata">
                                    <?php 
                                        // $user = $conn->query("SELECT * FROM users");
                                        // while ($user_data = $user->fetch_array()) {
                                    ?>
                                        <!-- <tr>
                                            <td><?php //echo $user_data['firstname'] . ' ' . $user_data['lastname'] ; ?></td>
                                            <td>xcxc</td>
                                            <td>xcxc</td>
                                            <td>xcxc</td>
                                        </tr> -->
                                    <?php
                                       // }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="../js/jquery.js"></script>
<script src="../bootstrap4/js/bootstrap.js"></script>
<?php  include_once 'proAlert.php'; ?>
<script src="js/dashboard_script.js"></script>
</body>
</html>