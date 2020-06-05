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
                <i class="fa fa-user-plus"></i> Register New User
            </strong>
        </div>

        <div class="card-body">
            <form method="post" name="frm_register">
                <div class="form-group">
                    <label for="fname">
                        <i class="fa fa-user"></i> Firstname
                    </label>
                    <input type="text" name="fname" id="fname" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">
                        <i class="fa fa-envelope"></i> Email Address
                    </label>
                    <input type="email" name="email" id="email" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">
                        <i class="fa fa-layer-group"></i> User Type
                    </label>
                    <select required class="form-control" name="type">
                        <option value="">Select User Type</option>
                        <option value="1">Student</option>
                        <option value="2">Lecturer</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pass">
                        <i class="fa fa-key"></i> Password
                    </label>
                    <input type="password" name="pass" id="pass" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="cpass">
                        <i class="fa fa-key"></i> Confirm Password
                    </label>
                    <input type="password" name="cpass" id="cpass" required class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-user-plus"></i> Add User
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once 'footer.php'; ?>

</body>

</html>