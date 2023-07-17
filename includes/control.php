<?php

if ($_SESSION["admin_username"] != "admin_username") {
	header("Location: login");
}

?>