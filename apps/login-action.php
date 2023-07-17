<?php

// Includes
include '../includes/connection.php';
include '../function/function.php';

extract($_POST);

// Login Action
if(isset($loginAction)) {
    $admin_username = post("admin_username");
    $admin_password = post("admin_password");

    $encrypt = sha1(md5($admin_password));
    $short = mb_substr($encrypt,0,32);

    if (!$admin_username || !$admin_password) {
        header("Location: ../login");
        $_SESSION["null"] = "null";
    }else{
        $query = $db->prepare("SELECT * FROM admin WHERE admin_username=? AND admin_password=?");
        $query->execute(array($admin_username,$short));
        $login = $query->fetch(PDO::FETCH_ASSOC);

        if($login) {
            $_SESSION["login"] = true;
            $_SESSION["admin_username"] = $login["admin_username"];
            $_SESSION["admin_id"] = $login["admin_id"];

            header("Location: ../index");
        }else {
            $_SESSION["error"] = "error";
            header("Location: ../login");
        }
    }
}


?>