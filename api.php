<?php
header('Content-type: application/json');

function getNameMessage() {
    $name = isset($_GET['name']) ? $_GET['name'] : "Recruto";
    $message = isset($_GET['message']) ? $_GET['message'] : "Let's be friends";
    
    echo json_encode("Hello $name! $message!");
}

getNameMessage();
?>