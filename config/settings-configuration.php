<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//error reporting
ini_set('display_errors', 1 );
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//csrf_token
if(empty($_SESSION['csrf_token'])){
    $csrf_token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $csrf_token;
}else{
    $csrf_token = $_SESSION['csrf_token'];
}
?>