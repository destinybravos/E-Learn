<?php

    include_once 'connect.php';
    if(isset($_POST['btn_submit'])){

    $name =$_POST['name'];
    $phone_num =$_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


        $insert = $conn->query("INSERT INTO contact( name, phone_num, email, subject, message) 
        VALUES('$name', '$phone_num', '$email','$subject','$message')");
        header ('location:../contact.php');

    }else{
        echo 'error in connection';
    }

    
    
?>