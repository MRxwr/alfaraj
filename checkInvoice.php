<?php
if ( isset($_GET["orderId"]) && !empty($_GET["orderId"]) ){
	$orderId = $_GET["orderId"];
	$stmt = $dbconnect->prepare("SELECT *
							FROM `invoices`
							WHERE `orderId` = ?");
	$stmt->bind_param("s", $orderId);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
	require('successEmail.php');
	require('sEmail.php');
}
?>