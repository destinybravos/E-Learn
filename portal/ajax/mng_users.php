<?php
include_once '../../ajax/connect.php';

$action = $_POST['action'];

if($action == 'fetch_users'){
    $users = $conn->query("SELECT * FROM users");
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

        // Determine if Account is active or not
        $status = $user_data['status'];
        if($status == 'active'){
            $switch = '<div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input active-switch" id="switch' . $user_data['id'] . '" checked>
                    <label class="custom-control-label" for="switch' . $user_data['id'] . '">'. $user_data['status'] .'</label>
                </div> ';
        }else{
            $switch = '<div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input active-switch" id="switch' . $user_data['id'] . '">
                <label class="custom-control-label" for="switch' . $user_data['id'] . '">'. $user_data['status'] .'</label>
            </div> ';
        }

        // Build the HTML Records
        $user_html .= '<tr id="' . $user_data['id'] . '">
                <td>' . $user_data['firstname'] . ' ' . $user_data['lastname'] . '</td>
                <td>'. fetch_school($user_data['school_id'], $conn) .'</td>
                <td>'. $user_type .'</td>
                <td>
                ' . $switch . '
                </td>
                <td style="cursor:pointer;">
                    <i class="fa fa-eye text-success view-user"></i> &nbsp; <i class="fa fa-trash text-danger delete-user"></i> 
                </td>
            </tr>';
    }

    echo $user_html;
}elseif($action == 'switch_activeness'){
    $state = $_POST['state'];
    $user_id = $_POST['user_id'];
    if($state == 'true'){
        $status = 'active';
    }else{
        $status = 'inactive';
    }
    // Update Database(User) Status
    $update = $conn->query("UPDATE users SET status='$status' WHERE id='$user_id'");
    if($update){
        echo 1;
    }else{
        echo 0;
    }
}elseif($action == 'get_a_user'){
    $user_id = $_POST['user_id'];
    // Query User Details from Database
    $user_det = $conn->query("SELECT * FROM users WHERE id='$user_id'");
    $user_data = $user_det->fetch_array();
    $html = '
    <div class="card" style="margin-bottom: 30px;">
        <div class="card-body">
        <div id="profile-img-container">
            <img src="imgs/profile/'. $user_data['photo'] .'" alt="img">
        </div>
        </div>
    </div>
    ';

    echo $html;
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