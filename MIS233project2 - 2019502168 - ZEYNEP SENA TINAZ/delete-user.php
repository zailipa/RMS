<?php

    include("config.php");

    $uid = $_GET['uid'];
    $user_control = $db->prepare("SELECT * FROM users WHERE uid = :uid");
    $user_control->execute([
        'uid' => $uid
    ]);

    if (!$user_control->rowCount()){
        header('Location: manage-users.php');
    }

    $user_delete = $db->prepare("UPDATE users SET status = :status WHERE uid = :uid");
    $result = $user_delete->execute([
        'status' => 0,
        'uid' => $uid
    ]);

    if ($result){
        header('Location:manage-users.php');
    }else {
        echo "Something went wrong!";
    }

?>