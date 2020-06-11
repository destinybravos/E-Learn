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

       if($insert){
        header ('location:../contact.php?status=inserted');
       }else{
        header ('location:../contact.php?status=insert_error');
       }

    }else{
        echo 'error in connection';
    }

    echo json_encode($result);
    
?>