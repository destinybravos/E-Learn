<?php
    session_start();

    include_once 'connect.php';

    $remember = $_POST['rem'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $result = array();

    $check_user = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

    if($check_user->num_rows > 0){
        $_SESSION['active_email'] = $email;
        $result = [
            'status' => 'success',
            'message' => '<i class="fa fa-circle-notch fa-pulse"></i> Login successful! Redirecting...!'
        ];
    }else{
        $result = [
            'status' => 'error',
            'message' => 'Invalid Email or Password'
        ];
    }

    echo json_encode($result);

?>