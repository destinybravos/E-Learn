<?php

    include_once 'connect.php';

    // recieving data from the ajax post request
    $firstname = $_POST['f'];
    $email = $_POST['e'];
    $password = $_POST['p'];
    $type = $_POST['t'];

    $result = array(); //Initializing Result as an array
    $msg = '';

    $check = $conn->query("SELECT * FROM users WHERE email='$email'"); //Trying to fetch a user with the email

    if($check->num_rows > 0){
        $msg = 'Email Already Exist';
        $result = [
            'status' => 'failed',
            'msg' => $msg
        ];
    }else{
        $users = checkUser($conn);
        if($users == 0){
            $type = 4; //Overide the type to super admin (4)
        }

        if($type == 2){
            $status = 'not active';
            $msg = 'Registration Successful. Please wait for Account Verification! Proceed to Login Page';
        }elseif($type == 4){
            $status = 'active';
            $msg = 'You have been assigned automatically as an administrator. Proceed to Login Page';
        }else{
            $status = 'active';
            $msg = 'Registration Successful. Proceed to Login Page';
        }

        $insert = $conn->query("INSERT INTO users(firstname,email,password,user_level,status) 
        VALUES('$firstname','$email','$password','$type','$status')");

        if($insert === true){
            $result = [
                'status' => 'success',
                'msg' => $msg
            ];
        }else{
            $result = [
                'status' => 'failed',
                'msg' => 'An unxpected error occoured'
            ];
        }
    }

    echo json_encode($result);


    function checkUser($conn_obj){
        $users = $conn_obj->query("SELECT * FROM users");
        return $users->num_rows;
    }

