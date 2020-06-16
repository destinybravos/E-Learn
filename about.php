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
    <style>
        #about_nav{
            text-align: center;
            position: sticky;
        }
        #about_nav a{
            color:white;
            padding: 0.5rem 0;
            display: block;
            text-decoration: none;
        }
        #about_nav div.row div.col-4:hover a, #about_nav div.row div.col-4:hover{
            color:#007bff !important;
            background-color: white;
        }
        #about_nav div.row div.col-4{
            border-right: thin solid white;
        }
    </style>
</head>

<body>
    <?php
    include_once 'head.php';
    ?>
    
    <div class="container" style="margin: 30px auto;">
        <div class="row">
            <div class="col-md-8 ;" style="text-align: justify; ">
                <div class="container bg-primary text-light" id="about_nav">
                    <div class="row">
                        <div class="col-4"><a class="abt_nav" href="#elearn-app">E-Learn</a></div>
                        <div class="col-4"><a class="abt_nav" href="#elearn-developers">Developers</a></div>
                        <div class="col-4"><a class="abt_nav" href="#elearn-tools">Tools</a></div>
                    </div>
                </div>

    <!-- Main About Start Here -->
                <h3 id="elearn-app" class='text-primary text-center card-header' style="top:10px;">About E-Learn Application</h3>
                <div class="card-body" style="min-height: 500px;">
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

                <h3 id="elearn-developers" class='text-primary text-center card-header' style="top:10px;">Developers</h3>
                <div class="card-body" style="min-height: 500px;">
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

                
                <h3 id="elearn-tools" class='text-primary text-center card-header' style="top:10px;">Tools and Languages</h3>
                <div class="card-body" style="min-height: 500px;">
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

    <script>
        $head_height = $('header').height();
        $abtnav_height = $('#about_nav').height();
        $('#about_nav').css('top',$head_height + 'px');

        $('a.abt_nav').on('click', function(e){
            e.preventDefault();
            var hash = this.hash;
            var top = $(hash).offset().top;
            var top_hd = $head_height + $abtnav_height;
            $('html').animate({
                'scrollTop': (top - top_hd)
            }, 'slow', function(){
                // window.location.hash = hash;
            });
            
        });
    </script>
</body>

</html>