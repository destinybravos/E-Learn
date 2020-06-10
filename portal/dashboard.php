<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
    <?php include_once 'nav.php' ?>

    <h2> Welcome <?php echo $active_user; ?> </h2>

    <button>
        <a href="logout.php">Logout User</a>
    </button>
    
</body>
</html>