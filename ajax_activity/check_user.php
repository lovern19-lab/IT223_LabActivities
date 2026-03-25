<?php

header('Content-Type: application/json');


$username = $_POST['username'] ?? '';
$taken_usernames = ['admin', 'gretsin', 'user123', 'lovern'];

if (in_array(strtolower($username), $taken_usernames)) {
    
    $response = [
        "available" => false,
        "message" => "❌ Sorry, that name is already taken!"
    ];
} else {
    
    $response = [
        "available" => true,
        "message" => "✅ Nice! This username is available."
    ];
}


echo json_encode($response);
?>