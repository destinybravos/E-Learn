<?php
include_once '../../ajax/connect.php';



    $what2do = $_POST['action'];


    if($what2do == 'fetch'){
        $html_list = '';
        $schools = $conn->query("SELECT school_id, name FROM schools ORDER BY name ASC");
        if($schools->num_rows > 0){
            while ($detail = $schools->fetch_array()) {
                $html_list .= '<li class="list-group-item" id="' . $detail['school_id'] . '">' . $detail['name'] . '
                <span style="float:right;">
                <i class="fa fa-edit text-primary edt_sch_list"></i> | <i class="fa fa-trash text-danger del_sch_list"></i>
                </span>
                </li>';
            }    
        }else{
            $html_list .= '<li class="list-group-item" id="">No School Found!</li>';
        }

        // Return the html list
        echo $html_list;
    }elseif($what2do == 'add'){
        $sch_name = $_POST['sname'];
        $sch_type = $_POST['stype'];
        $address = $_POST['sloc'];
        $state = $_POST['sstate'];

        $check_sc = $conn->query("SELECT * FROM schools WHERE name='$sch_name'");
        if($check_sc->num_rows > 0){
            echo json_encode(['status'=>'exist']);
        }else{
            $insert_sch = $conn->query("INSERT INTO schools(name, type, address, state)
                VALUES('$sch_name','$sch_type','$address','$state')");

            if($insert_sch == true){
                echo json_encode(['status'=>'success']);
            }else{
                echo json_encode(['status'=>'error']);
            }
        }
    }elseif($what2do == 'delete'){
        $id = $_POST['id'];
        $delete_sc = $conn->query("DELETE FROM schools WHERE school_id='$id'");
        if($delete_sc == true){
            echo json_encode(['status'=>'success']);
        }else{
            echo json_encode(['status'=>'error']);
        }
    }