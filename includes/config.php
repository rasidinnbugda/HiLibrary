<?php

// Includes
include_once 'connection.php';

// Admin Information
$admin_data = $db->prepare("SELECT * FROM admin WHERE admin_id=?");
$admin_data->execute(array(1));
$get_admin_data = $admin_data->fetch(PDO::FETCH_ASSOC);

include 'control.php';

?>