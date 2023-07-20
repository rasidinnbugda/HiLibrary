<?php

ob_start();
session_start();

// Includes
include_once 'connection.php';

// Admin Information
$admin_data = $db->prepare("SELECT * FROM admin WHERE admin_id=?");
$admin_data->execute(array(1));
$get_admin_data = $admin_data->fetch(PDO::FETCH_ASSOC);

include 'control.php';

if(!isset($_SESSION["lang"])) {
    $_SESSION["lang"] = "en";
}elseif(isset($_GET["lang"]) && $_SESSION["lang"] != $_GET["lang"] && !empty($_GET["lang"])) {
    if($_GET["lang"] == "en") {
        $_SESSION["lang"] = "en";
    }else{
        $_SESSION["lang"] = "tr";
    }
}

require_once "languages/".$_SESSION["lang"].".php";

?>