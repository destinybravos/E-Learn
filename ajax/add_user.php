<?php

    include_once 'connect.php';

    $firstname = $_POST['f'];
    $email = $_POST['e'];
    $password = $_POST['p'];
    $result = array(); //Initializing Result as an array

    $check = $conn->query("SELECT * FROM users WHERE email='$email'"); //Trying to fetch a user with the email

    if($check->num_rows > 0){
        $result = [
            'status' => 'failed',
            'msg' => 'Email Already Exist'
        ];
    }else{
        $insert = $conn->query("INSERT INTO users(firstname,email,password) 
        VALUES('$firstname','$email','$password')");

        if($insert === true){
            $result = [
                'status' => 'success',
                'msg' => 'User details stored successfully'
            ];
        }else{
            $result = [
                'status' => 'failed',
                'msg' => 'An unxpected error occoured'
            ];
        }
    }

    echo json_encode($result);

