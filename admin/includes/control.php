<?php

if ($_SESSION["admin_username"] != $get_admin_data["admin_username"]) {
	header("Location: login");
}

?>