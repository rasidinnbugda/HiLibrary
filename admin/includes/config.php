<?php

// Includes
include_once 'connection.php';

// Admin Information
$admin_data = $db->prepare("SELECT * FROM admin WHERE admin_id=?");
$admin_data->execute(array(1));
$get_admin_data = $admin_data->fetch(PDO::FETCH_ASSOC);

include 'control.php';

$general_settings = $db->prepare("SELECT * FROM general_settings");
$general_settings->execute(array());
$get_settings = $general_settings->fetch(PDO::FETCH_ASSOC);

require_once "languages/".$get_settings["site_lang"].".php";

?>