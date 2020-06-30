<?php
include_once '../../ajax/connect.php';

$user_data = $_POST['user'];

// Check for Space and Split Data

// Serch records (wildcard)
if($user_data == ''){
    $users = $conn->query("SELECT * FROM users");
}else{
    // Check and Get School ID 
    $sch_id = fetch_school_id($user_data, $conn);

    // Query Database
    $users = $conn->query("SELECT * FROM users WHERE 
        firstname LIKE '%" . $user_data . "%'
        OR lastname LIKE '%" . $user_data . "%'
        OR school_id LIKE '%" . $sch_id . "%'
        ");
}


$user_html = '';
    while ($user_data = $users->fetch_array()) {
        // Determine the Account/Type (User Level)
        $type = $user_data['user_level'];
        if($type == 1){
            $user_type = 'Student';
        }elseif($type == 2){
            $user_type = 'Lecturer';
        }elseif($type == 3){
            $user_type = 'Admin';
        }else{
            $user_type = 'Super Admin';
        }

        // Build the HTML Records
        $user_html .= '<tr id="' . $user_data['id'] . '">
                <td>' . $user_data['firstname'] . ' ' . $user_data['lastname'] . '</td>
                <td>'. fetch_school($user_data['school_id'], $conn) .'</td>
                <td>'. $user_type .'</td>
                <td>'. $user_data['status'] .'</td>
                <td style="cursor:pointer;">
                    <i class="fa fa-eye text-success"></i> &nbsp; <i class="fa fa-trash text-danger"></i> 
                </td>
            </tr>';
    }

    echo $user_html;

function fetch_school_id($name, $conn_obj){
    $school = $conn_obj->query("SELECT * FROM schools WHERE name LIKE '%" . $name . "%'");
    if($school->num_rows > 0){
        $school_data = $school->fetch_array();
        $sch_name = $school_data['school_id'];
        return $sch_name;
    }else{
        return 'Not Specified';
    }
}

function fetch_school($sch_id, $conn_obj){
    $school = $conn_obj->query("SELECT * FROM schools WHERE school_id='$sch_id'");
    if($school->num_rows > 0){
        $school_data = $school->fetch_array();
        $sch_name = $school_data['name'];
        return $sch_name;
    }else{
        return 'Not Specified';
    }
}