<?php

session_start();

// Includes
include '../includes/connection.php';
include '../function/function.php';

control();

extract($_POST);

// Information Update
if(isset($adminInformationUpdate)) {
    $admin_username = post("admin_username");
    $admin_email = post("admin_email");
    $admin_full_name = post("admin_full_name");

    if(!$admin_username || !$admin_email || !$admin_full_name) {
        header("Location: ../login-settings");
        $_SESSION["null"] = "null";
    }else{
        $admin_information = $db->prepare("UPDATE admin SET admin_username=?, admin_email=?, admin_full_name=? WHERE admin_id=?");
        $update = $admin_information->execute(array($admin_username,$admin_email,$admin_full_name,1));

        if($update) {
            header("Location: ../login-settings");
            $_SESSION["updateSuccess"] = "updateSuccess";

            $_SESSION["admin_username"] = $admin_username;
        }else{
            header("Location: ../login-settings");
            $_SESSION["error"] = "error";
        }
    }
}

// Update Password
if(isset($changePassword)) {
    $old_password = post("old_password");
    $new_password = post("new_password");
    $retype_new_password = post("retype_new_password");

    $encrypt_old_password = sha1(md5($old_password));
    $short_old_password = mb_substr($encrypt_old_password,0,32);

    $encrypt_new_password = sha1(md5($new_password));
    $short_new_password = mb_substr($encrypt_new_password,0,32);

    if(!$old_password || !$new_password || !$retype_new_password) {
        header("Location: ../login-settings");
        $_SESSION["null"] = "null";
    }else{
        $verify_password = $db->prepare("SELECT * FROM admin WHERE admin_password=?");
        $verify_password->execute(array($short_old_password));
        $verify_admin = $verify_password->rowCount();

        if($verify_admin != 0) {
            if($new_password == $retype_new_password) {
                $password = $db->prepare("UPDATE admin SET admin_password=? WHERE admin_id=?");
                $change = $password->execute(array($short_new_password,1));

                if($change) {
                    header("Location: ../login-settings");
                    $_SESSION["changeSuccess"] = "changeSuccess";
                }else{
                    header("Location: ../login-settings");
                    $_SESSION["error"] = "error";
                }
            }else{
                header("Location: ../login-settings");
                $_SESSION["mismatchedPasswords"] = "mismatchedPasswords";
            }
        }elseif($verify_admin == 0){
            header("Location: ../login-settings");
            $_SESSION["wrongOldPassword"] = "wrongOldPassword";
        }
    }
}

?>