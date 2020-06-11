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
    }else{
        header('location:../login.php?problem=user_not_found');
    }
}else{
    header('location:../login.php?problem=invalid_session');
}
?>

<!-- Sidebar -->
<nav id="sidebar">
    <div id="user-detail">
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
        <button class="btn btn-default btn-sm mt-2">
            <i class="fa fa-sign-out-alt"></i>
            <a href="logout.php">Logout User</a>
        </button>
    </div>
</nav>

