<?php
    session_start();
    
include_once '../../ajax/connect.php';
    $user_id = $_SESSION['active_user_id'];
    $what2do = $_POST['what2do'];

    if($what2do == 'update_biodata'){
        $fieldname = $_POST['name'];
        $value = $_POST['value'];
    
        $update = $conn->query("UPDATE users SET $fieldname='$value' WHERE id='$user_id'");
    
        if($update){
            echo json_encode(['status' => 'success']);
        }else{
            echo json_encode(['status' => 'failure']);
        }
    }elseif($what2do == 'update_sch_id'){
        $id = $_POST['id'];
        $update = $conn->query("UPDATE users SET school_id='$id' WHERE id='$user_id'");
        if($update){
            //Fetch School Details(Name Precisely)
            $school = $conn->query("SELECT * FROM schools WHERE school_id='$id'");
            $sch_data = $school->fetch_array();
            $sch_name = $sch_data['name'];
            echo json_encode(['status' => 'updated', 'school_name'=>$sch_name]);
        }else{
            echo json_encode(['status' => 'failure']);
        }
    }

    ?>

