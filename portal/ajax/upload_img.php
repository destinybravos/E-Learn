<?php
    session_start();
    $user_id = $_SESSION['active_user_id']; //Getting the Active(current) User Id

    include_once '../../ajax/connect.php';

    $valid_ext = ['jpg','jpeg', 'png', 'gif'];
    $max_size = 102400;
    $filename = $_FILES['photo']['name'];
    $temp_name = $_FILES['photo']['tmp_name'];
    $filesize = $_FILES['photo']['size'];
    $fileext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
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
        }else{
            $check = $conn->query("SELECT * FROM users WHERE id='$user_id'");
            if($check->num_rows > 0){
                $userdata = $check->fetch_array();
                $new_filename = time() . $userdata['firstname'] . '.' . $fileext;
                $uploaded = move_uploaded_file($temp_name, '../imgs/profile/' . $new_filename);
                if($uploaded){
                    // Delete the old picture if not default
                    if($userdata['photo'] != 'default.png'){
                        unlink('../imgs/profile/' . $userdata['photo']);
                    }
                    // Update Database Photo Column
                    $update_db = $conn->query("UPDATE users SET photo='$new_filename' WHERE id='$user_id'");
                    if($update_db){
                        echo json_encode([
                            'status'=>'success',
                            'message'=>'Image Uplaoded',
                            'newimage'=>$new_filename
                        ]);
                    }else{
                        echo json_encode([
                            'status'=>'failed',
                            'message'=>'Could not update profile picture'
                        ]);
                    }
                }else{
                    echo json_encode([
                        'status'=>'failed',
                        'message'=>'An Unexpected Error!'
                    ]);
                }
            }else{
                echo json_encode([
                    'status'=>'failed',
                    'message'=>'User not found!'
                ]);
            }
        }
    }



?>