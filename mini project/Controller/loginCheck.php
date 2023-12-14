<?php
include_once("../model/userModel.php");

$input = urldecode(file_get_contents("php://input"));
$data = json_decode($input);

if ($data && isset($data->id) && isset($data->pass)) {
    $id = $data->id;
    $password = $data->pass;

    // Assuming login function returns user information on success
    $user = login($id, $password);

    if ($user) {
        $response = array('success' => true, 'redirect' => ($user['UserType'] == 'admin') ? '../view/admin_home.php' : '../view/user_home.php');
        echo json_encode($response);
    } else {
        $response = array('success' => false, 'debug' => 'Login failed. User not found.'); // Provide additional debug information
        echo json_encode($response);
    }
} else {
    // Handle the case when POST parameters are not set
    $response = array('success' => false, 'debug' => 'Invalid request parameters');
    echo json_encode($response);
}
?>
