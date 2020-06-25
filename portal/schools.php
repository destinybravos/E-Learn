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
 $page_tag = '<i class="fas fa-school"></i> Manage Schools';
?>
<?php include_once 'nav.php' ?>

<div id="site_content" class="<?php echo $slim_status ?>">
<?php
    include_once 'top_nav.php';
?>

    <div id="page_content">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <strong> <i class="fas fa-school"></i> Register Schools</strong>
                        </div>
                        <div class="card-body">
                            <form name="frm_addSchool">
                                <div class="form-group">
                                    <label for="sch_name">School Name</label>
                                    <input type="text" name="sch_name" id="sch_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="sch_type">School Type</label>
                                    <select name="sch_type" id="sch_type" class="form-control" required>
                                        <option value="">Select Institution Type</option>
                                        <option value="University">University</option>
                                        <option value="Polytechnic">Polytechnic</option>
                                        <option value="College">College</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="loc">Address (Location)</label>
                                    <input type="text" name="loc" id="loc" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <select name="state" id="state" class="form-control" >
                                        <option value="">Select State</option>
                                        <option value="Imo State">Imo State</option>
                                        <option value="Delta State">Delta State</option>
                                        <option value="Rivers State">River State</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm" id="btn_add_sch">
                                        <i class="fa fa-save"></i> Save School Details
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <strong>
                                <i class="fas fa-school"></i> Added Schools
                            </strong>
                        </div>
                        <div class="card-body" style="padding: 0;">
                            <ul class="list-group" id="sch_list_contanier">

                            </ul>
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