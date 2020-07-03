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
 $page_tag = '<i class="fa fa-tachometer-alt"></i> Dashboard';
?>
<?php include_once 'nav.php' ?>

<div id="site_content" class="<?php echo $slim_status ?>">
<?php
    include_once 'top_nav.php';
?>

    <div id="page_content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h1 id="no_users">0</h1>
                            <div style="font-size:1.2rem;"> <i class="fa fa-users"></i> Users</div>
                            <small><a href="users.php">View Registered Users</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h1 id="no_schools">0</h1>
                            <div style="font-size:1.2rem;"> <i class="fas fa-school"></i>  Schools</div>
                            <small><a href="schools.php">View Registered Schools</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h1>0</h1>
                            <div style="font-size:1.2rem;">Users</div>
                            <small><a href="users.php">View Registered Users</a></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h1>0</h1>
                            <div style="font-size:1.2rem;">Users</div>
                            <small><a href="users.php">View Registered Users</a></small>
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