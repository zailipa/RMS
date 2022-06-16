<?php

session_start();
ob_start();
$db = new PDO("mysql:host=localhost;dbname=RMS;charset=utf8", "root", "");

if (isset($_SESSION['uname'])){

    $uname = $_SESSION["uname"];

    $user_search = $db->prepare("SELECT * FROM users WHERE uname = :uname");
    $user_search->execute([
        'uname' => $uname
    ]);
    $user_detail = $user_search->fetch(PDO::FETCH_ASSOC);

    function user_detail($column){
        global $user_detail;
        return $user_detail[$column];
    }

}