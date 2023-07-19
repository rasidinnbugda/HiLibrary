<?php

session_start();

// Includes
include '../includes/connection.php';
include '../function/function.php';

control();

extract($_POST);

// Add Library
if(isset($addLibrary)) {
    $library_name = post("library_name");
    $library_description = post("library_description");

    if(!$library_name) {
        header("Location: ../add-library");
        $_SESSION["null"] = "null";
    }else{
        $addedLibrary = $db->prepare("INSERT INTO libraries SET library_name=?, library_description=?");
        $addAction = $addedLibrary->execute(array($library_name,$library_description));

        if($addAction) {
            header("Location: ../libraries");
            $_SESSION["addSuccess"] = "addSuccess";
        }else{
            header("Location: ../add-library");
            $_SESSION["error"] = "error";
        }
    }
}

// Edit Library

// Delete Library
$library_delete_id = $_GET["library_delete_id"];
if(isset($library_delete_id)) {

    $deletedLibrary = $db->prepare("DELETE FROM libraries WHERE library_id=?");
    $deleteAction = $deletedLibrary->execute(array($library_delete_id));

    if ($deleteAction) {
        header("Location: ../libraries");
        $_SESSION["deleteSuccess"] = "deleteSuccess";
    }else{
        header("Location: ../libraries");
        $_SESSION["error"] = "error";
    }
}

?>