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

    <!-- Registration -->
    <div class="form_container card">
        <div class="card-header">
            <strong>
                <i class="fa fa-sign-in-alt"></i> Login Here
            </strong>
        </div>

        <div class="card-body">
            <form method="post" name="form_login">
                <div class="form-group">
                    <label for="email">
                        <i class="fa fa-envelope"></i> Email Address
                    </label>
                    <input type="email" name="email" id="email" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">
                        <i class="fa fa-key"></i> Password
                    </label>
                    <input type="password" name="pass" id="pass" required class="form-control">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm" style="box-shadow: none;">
                        <i class="fa fa-sign-in-alt"></i> Login
                    </button>
                </div>

                <div class="form-group">
                    <a href="register.php">Create an account.</a>
                </div>

            </form>
        </div>
    </div>

    <?php 
    include_once 'footer.php'; 
    ?>

</body>

</html>