<?php
include_once '../ajax/connect.php';
//Validate User
if(isset($_SESSION['active_email']) and $_SESSION['active_email'] != ''){
    $email = $_SESSION['active_email'];
    $user = $conn->query("SELECT * FROM users WHERE email='$email'");
    if($user->num_rows > 0){
        $user_data = $user->fetch_array();
        $active_user = $user_data['firstname'] . ' ' . $user_data['lastname'];
        $active_user_photo = $user_data['photo'];
        $firstname = $user_data['firstname'];
        $lastname = $user_data['lastname'];
        $email = $user_data['email'];
        $phone = $user_data['phone'];
        $school_id = $user_data['school_id'];
        $user_level = $user_data['user_level'];
        $status = $user_data['status'];
    }else{
        header('location:../login.php?problem=user_not_found');
    }
}else{
    header('location:../login.php?problem=invalid_session');
}

if(isset($_SESSION['slim'])){
    $slim_status = $_SESSION['slim'];
}else{
    $slim_status = '';
}
    
?>

<!-- Sidebar -->
<nav id="sidebar" class="<?php echo $slim_status ?>">
    <div id="user-detail" class="<?php echo $slim_status; ?>">
        <a href="profile.php">
            <div class="user-image-container">
                <img src="imgs/profile/<?php echo $active_user_photo; ?>" alt="profile image">
            </div>
            <div>
                <strong>
                    <?php echo $active_user ?>
                </strong>
            </div>
        </a>
    </div>

    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                    <i class="fa fa-tachometer-alt"></i> <label class="nav-label <?php echo $slim_status ?>"> Dashboard </label>
                </a>
            </li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link">
                    <i class="fa fa-user"></i> <label class="nav-label  <?php echo $slim_status ?>"> User's Profile</label>
                </a>
            </li>
            <li class="nav-item">
                <a href="schools.php" class="nav-link">
                    <i class="fas fa-school"></i> <label class="nav-label <?php echo $slim_status ?>"> Manage Schools</label>
                </a>
            </li>
            <li class="nav-item">
                <a href="users.php" class="nav-link">
                    <i class="fa fa-users"></i> <label class="nav-label <?php echo $slim_status ?>"> Manage Users </label>
                </a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">
                    <i class="fa fa-sign-out-alt"></i> <label class="nav-label <?php echo $slim_status ?>"> Logout User</label>
                </a>
            </li>
        </ul>
    </nav>

    <div id="btn-toggle-nav" class="<?php echo $slim_status ?>">
        <span>
            <i class="fa fa-chevron-left"></i>
        </span>
    </div>
</nav>


