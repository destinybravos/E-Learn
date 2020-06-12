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
            <div class="col-md-8 ;" style="text-align: justify; ">
                <h3 class='text-primary text-center card-header'>About us</h3>
                <div class="card-body">
                This is an award-winning online training provider, 
            delivering market-leading digital courses to business and IT professionals around the globe. 
            With content written by online training specialists and highly-competitive prices, 
            Good e-Learning has earned an impressive track record with both first-time pass rates and repeat customers.

            What sets Good e-Learning apart from the competition is its focus on usability.
            Students receive long-term access to resources designed to not only prepare them for certification exams, 
            but also equip them to utilize their training in practice. Thanks to the market-leading LMS, 
            The Learning Ecosystem, Good e-Learning can also supply managers with highly relevant data on corporate
             training programs, allowing them to make the most out of their investments.
                </div>
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