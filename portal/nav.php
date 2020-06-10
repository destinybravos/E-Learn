<?php
include_once '../ajax/connect.php';
//Validate User
if(isset($_SESSION['active_email']) and $_SESSION['active_email'] != ''){
    $email = $_SESSION['active_email'];
    $user = $conn->query("SELECT * FROM users WHERE email='$email'");
    if($user->num_rows > 0){
        $user_data = $user->fetch_array();
        $active_user = $user_data['firstname'] . ' ' . $user_data['lastname'];
    }else{
        header('location:../login.php?problem=user_not_found');
    }
}else{
    header('location:../login.php?problem=invalid_session');
}