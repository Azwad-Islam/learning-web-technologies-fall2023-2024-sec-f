<?php

if (!isset($_REQUEST['data'])) {
    $responsetext = ['error' => 'nothing recieved'];
    echo json_encode($responsetext);
} else {
    include_once('../model/userModel.php');
    $data = $_REQUEST['data'];
    print_r($data);
}
?>