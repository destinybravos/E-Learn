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
                    <label for="pass">
                        <fieldset>
                            <h6> <i class="fa fa-user"></i> User Type</h6>
                            <p>
                                <label>Select User</label>
                                <select id="myList">
                                    <option value="1">Select User</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </p>
                        </fieldset>
                </div>
                <div class="form-group">
                    <button type="reset" class="btn btn-danger btn-sm" style="box-shadow: none;">
                        <i class="fas fa-window-close"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-success btn-sm" style="box-shadow: none;">
                        <i class="fa fa-sign-in-alt"></i> Login
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>

</body>

</html>