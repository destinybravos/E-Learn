<?php
    session_start();
    $user_id = $_SESSION['active_user_id']; //Getting the Active(current) User Id

    include_once '../../ajax/connect.php';

    $valid_ext = ['jpg','jpeg', 'png', 'gif'];
    $max_size = 10240;
    $filename = $_FILES['photo']['name'];
    $filesize = $_FILES['photo']['size'];
    $fileext = pathinfo($filename, PATHINFO_EXTENSION);
    $type = $_POST['imagetype'];

    if($filesize > $max_size){
        echo json_encode([
            'status'=>'failed',
            'message'=>'Image too large'
        ]);
    }elseif(!in_array($fileext, $valid_ext)){
        echo json_encode([
            'status'=>'failed',
            'message'=>'Invalid Image Format'
        ]);
    }else{
        if($user_id ==''){ //If the session could not get active user ID
            echo json_encode([
                'status'=>'failed',
                'message'=>'Unauthorized User'
            ]); 
        }
    }



?>