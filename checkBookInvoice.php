<?php
if ( isset($_GET["orderId"]) && !empty($_GET["orderId"]) ){
	$orderId = $_GET["orderId"];
	require('sEmail.php');
	$orderSet = 1;
}

?>