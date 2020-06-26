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
                            <div>
                                <button type="button" id="btn_upload_img" class="btn btn-primary">
                                    <i class="fa fa-camera"></i> Uplaod Image
                                </button>
                            </div>
                            <span style="display: none;">
                            <input type="file" name="photo_upload" id="photo_upload">
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
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-cogs"></i> Account Info
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label> <strong>User Level: </strong> 
                                    <?php
                                        if($user_level == 1){
                                            echo 'Student';
                                        }elseif($user_level == 2){
                                            echo 'Lecturer';
                                        }elseif($user_level == 3){
                                            echo 'Admin';
                                        }elseif($user_level == 1){
                                            echo 'Super Admin';
                                        }
                                    ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <label> <strong>Account Status: </strong> <?php echo $status ?></label>
                            </div>
                            <div class="form-group">
                                <label style="display: block;"> <strong>School: </strong>
                                   <span class="norm" id="sch_id">
                                   <?php
                                        if($school_id == 0){
                                            echo 'No School Selected';
                                        }else{
                                            $fetch_school = $conn->query("SELECT name FROM schools WHERE school_id='$school_id'");
                                            if($fetch_school->num_rows > 0){
                                                $sch_detail = $fetch_school->fetch_array();
                                                echo $sch_detail['name'];
                                            }
                                        }
                                    ?>
                                   </span>
                                   <span class="edit">
                                       <select name="sel_schools" id="sel_schools" class="form-control" style="display:inline-block; width:auto;">
                                           <option value="">Select School</option>
                                           <?php
                                                $fetch_school = $conn->query("SELECT school_id,name FROM schools");
                                                while ($schools = $fetch_school->fetch_array()) {
                                                    echo '
                                                        <option value="' . $schools['school_id'] . '"> ' . $schools['name'] . ' </option>
                                                    ';
                                                }
                                           ?>
                                       </select>
                                   </span>
                                   <span id="edt_sch_profile" style="float: right; cursor:pointer;">
                                        <i class="fa fa-edit"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <strong><i class="fas fa-school"></i> School Info</strong>
                        </div>
                        <div class="card-body">
                            <?php
                            if($school_id == 0){
                                echo '<div class="alert alert-danger" id="sch_det_alert">
                                    <strong>NOTICE: </strong> You have not selected your school! Please select school.
                                </div>';
                            }                           
                            ?>
                            <div class="form_group mb-3">
                                Name: <strong id="name_ins"></strong>
                            </div>
                            <div class="form_group mb-3">
                                Type: <strong id="type_ins"></strong>
                            </div>
                            <div class="form_group mb-3">
                                Address: <strong id="add_ins"></strong>
                            </div>
                            <div class="form_group mb-3">
                                State: <strong id="state_ins"></strong>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>


<form action="sds" method="post" enctype="multipart/form-data">
    
</form>


<script src="../js/jquery.js"></script>
<script src="../bootstrap4/js/bootstrap.js"></script>
<?php  include_once 'proAlert.php'; ?>
<script src="js/dashboard_script.js"></script>


</body>
</html>