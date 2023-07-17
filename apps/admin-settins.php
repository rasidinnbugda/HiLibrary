<?php

// Includes
include '../includes/connection.php';
include '../function/function.php';

extract($_POST);

// Information Update
if(isset($adminInformationUpdate)) {
    $admin_username = post("admin_username");
    $admin_email = post("admin_email");
    $admin_full_name = post("admin_full_name");

    if(!$admin_username || !$admin_email || !$admin_full_name) {
        header("Location: ../login-settings?error");
    }else{
        $admin_information = $db->prepare("UPDATE admin SET admin_username=?, admin_email=?, admin_full_name=? WHERE admin_id=?");
        $update = $admin_information->execute(array($admin_username,$admin_email,$admin_full_name,1));

        if($update) {
            header("Location: ../login-settings?yes");
        }else{
            header("Location: ../login-settings?no");
        }
    }
}

// Update Password
if(isset($adminPasswordUpdate)) {

}

?>