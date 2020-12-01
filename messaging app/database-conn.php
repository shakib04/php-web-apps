<?php
$db_user = "root";
$db_pass = "";
$server = "localhost";
$db_name = "messaging";


function getMessages($query)
{
    global $server, $db_name, $db_user, $db_pass;
    $conn = mysqli_connect($server, $db_user, $db_pass, $db_name) or die("Connection Problem" . mysqli_connect_error());

    $result = mysqli_query($conn, $query);
    return $result;
}

function sendMessage($query){
    global $server, $db_name, $db_user, $db_pass;
    $conn = mysqli_connect($server, $db_user, $db_pass, $db_name) or die("Connection Problem" . mysqli_connect_error());

    $result = mysqli_query($conn, $query);
    return $result;
    
}