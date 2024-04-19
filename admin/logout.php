<?php
session_start();
setcookie("CreateKWUALFARAJ", "", time() - (86400*30 ), "/");
if ( session_destroy() ){
	header("Location: login.php");die();
}
?>