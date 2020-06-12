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
<?php include_once 'nav.php' ?>

<div id="site_content">
<?php
    include_once 'top_nav.php';
?>

    <div id="page_content">
        <div class="">
            <h3>
                Dummy Content
            </h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus facere fugiat ut accusantium 
                provident quidem temporibus, molestias sunt odio eaque? Ex sint numquam et magnam eos deleniti quia 
                ipsam facilis.
            </p>
        </div>

    </div>

</div>

<script src="../js/jquery.js"></script>
<script src="../bootstrap4/js/bootstrap.js"></script>
<script src="js/dashboard_script.js"></script>
</body>
</html>