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

                <div id="accordion" class="mb-3">
                    <div class="card">
                        <div class="card-header">
                        <a href="#first-card" class="card-link" data-toggle="collapse">How to create an account </a>
                        </div>
                        <div id="first-card" class="collapse show" data-parent="#accordion">
                         <div class="card-body">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nihil at fugiat! 
                         Harum eos voluptatibus adipisci sit aliquid ducimus assumenda rem, quis maiores!
                          Dolores magnam nihil quisquam deserunt, quod tempore.
                         </div>
                        </div>
                    </div>
                </div>

                <div id="accordion" class="mb-3">
                    <div class="card">
                        <div class="card-header">
                        <a href="#second-card" class="card-link " data-toggle="collapse">How to join class </a>
                        </div>
                        <div id="second-card" class="collapse show" data-parent="#accordion">
                         <div class="card-body">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nihil at fugiat! 
                         Harum eos voluptatibus adipisci sit aliquid ducimus assumenda rem, quis maiores!
                          Dolores magnam nihil quisquam deserunt, quod tempore.
                         </div>
                        </div>
                    </div>
                </div>

                <div id="accordion" class="mb-5">
                    <div class="card">
                        <div class="card-header">
                        <a href="#three-card" class="card-link" data-toggle="collapse">How to verify my account </a>
                        </div>
                        <div id="three-card" class="collapse show" data-parent="#accordion">
                         <div class="card-body">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nihil at fugiat! 
                         Harum eos voluptatibus adipisci sit aliquid ducimus assumenda rem, quis maiores!
                          Dolores magnam nihil quisquam deserunt, quod tempore.
                         </div>
                        </div>
                    </div>
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