<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Website</title>
    <!-- External Files/CSS -->
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="fa/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/elearning.png">
    <!-- JQuery Library -->
    <script src="js/jquery.js"></script>
</head>

<body>
    <?php
    include_once 'head.php';
    ?>

    <div class="container" style="margin: 30px auto;">
        <div class="row">
            <div class="col-md-8">
            
            </div>


            <div class="col-md-4">
                <?php include_once "sidebar.php";  ?>
            </div>
        </div>
    </div>

<?php 
    include_once 'footer.php';
    ?>
</body>

</html>