<?php
    session_start();
    
include_once '../ajax/connect.php';


    $user_id = $_SESSION['active_user_id'];
    $fieldname = $_POST['name'];
    $value = $_POST['value'];

    $update = $conn->query("UPDATE users SET $fieldname='$value' WHERE id='$user_id'");

    if($update){
        echo json_encode(['status' => 'success']);
    }else{
        echo json_encode(['status' => 'failure']);
    }

    ?>

