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
 $page_tag = '<i class="fa fa-user"></i> Profile';
?>
<?php include_once 'nav.php'; ?>

<div id="site_content" class="<?php echo $slim_status ?>">
<?php
    include_once 'top_nav.php';
?>

    <div id="page_content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="margin-bottom: 30px;">
                        <div class="card-body">
                        <div id="profile-img-container">
                            <img src="imgs/profile/<?php echo $active_user_photo; ?>" alt="img">
                            <span>
                                upload
                            </span>
                        </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-user"></i> Personal Info
                            <span style="float:right; cursor:pointer; padding:4px 8px;">
                                <i class="fa fa-edit"></i>
                            </span>
                        </div>
                        <div class="card-body" id="form_details">
                            <div class="form-group">
                                <label> 
                                    <strong>Firstname: </strong>
                                    <span class="norm"> <?php echo $firstname ?></span>
                                    <span class="edit">
                                        <input type="text" name="firstname" id="firstname" value="<?php echo $firstname ?>">
                                    </span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label> 
                                    <strong>Lastname: </strong> 
                                    <span class="norm"> <?php echo $lastname ?></span>
                                    <span class="edit">
                                        <input type="text" name="lastname" id="lastname" value="<?php echo $lastname ?>">
                                    </span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label> 
                                    <strong>Phone Number: </strong> 
                                    <span class="norm"> <?php echo $phone ?></span>
                                    <span class="edit">
                                        <input type="text" name="phone" id="phone" value="<?php echo $phone ?>">
                                    </span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label> 
                                    <strong>Email: </strong> 
                                    <span class="norm"> <?php echo $email ?></span>
                                    <span class="edit">
                                        <input type="text" name="email" id="emeil" value="<?php echo $email ?>">
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-cogs"></i> Account Info
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label> <strong>User Level: </strong> <?php echo '' ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<!--  -->
<span id="alert-container" style="z-index: 3;"></span>
<!--  -->

<script src="../js/jquery.js"></script>
<script src="../bootstrap4/js/bootstrap.js"></script>
<?php  include_once 'proAlert.php'; ?>
<script src="js/dashboard_script.js"></script>
</body>
</html>