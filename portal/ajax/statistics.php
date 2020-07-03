<?php

include_once '../../ajax/connect.php';

// Get Number of users
$users = $conn->query("SELECT * FROM users");
$num_users = $users->num_rows;

// Get Number of Schools
$schools = $conn->query("SELECT * FROM schools");
$num_schools = $schools->num_rows;



echo json_encode([
    'no_schools'=> $num_schools,
    'no_users'=> $num_users
]);


?>