<?php
if ( isset($_GET["orderId"]) && !empty($_GET["orderId"]) ){
	$orderId = $_GET["orderId"];
	if ( $resultMY["Data"]["InvoiceStatus"] == "Paid" ){
		$sql = "UPDATE 
		`invoices`
		SET 
		`status` = '0'
		WHERE 
		`orderId` = ?";
		$stmt = $dbconnect->prepare($sql);
		$stmt->bind_param("s", $orderId);
		$stmt->execute();
	}else{
		$sql = "UPDATE `bookInvoices` SET `status` = ? WHERE `orderId` = ?";
		$stmt = $dbconnect->prepare($sql);
		$stmt->bind_param("is", $status, $orderId);
		$status = 2;
		$orderId = $orderId;
		$stmt->execute();
	}
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