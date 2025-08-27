<?php
if ( isset($_GET["paymentId"]) OR isset($_GET["orderId"]) ){
	$token = "Fj9A6M-ouf41gJB6Q6Ir6kfVQRZP5pv8Cf5CSAJHELXTMp6BiWRx5zn0vX2Bh-LDCnQ6Al6bw7rr2l0lNz1zi0ZsqAiTj8WuyDkphVdRV9bxooU0uKgX-tvPOFnK4q5wLJwu7afJ5Z4CD2Lnb4IBtNlNDtBBRllAnCR2X34NRoj-xm9e78iyQNZyq50Ae9O5xrzG3jYODBHqU5sjpsokL1KyE8R0DXGcTjIDKre4MDUSubOFQHeXGh9hDVd1Kfts95WM1BbUiFyZDPwreY3uez62TgySfEVdIWDJvCdUi2IihjprCHDFip4ql2L8snGIoGCMgUl6bugVwYgtjmpA63DPbrAfbzTTGsEI7f7nF1nHpfwzIwNab233_1nFmP7bF1v4bsnTpoRYGpZG09XLAx3QNovxnT2sVhgU8JTj3oS5uz71sYniVSix5yb3ZMMbBQSs4LAAJdMmxC2MQxvixZ59_Ls-d_X8VNJxiPcVwUWzHLnWOsArXVJzR_ewewuuT1ybPdTZTmSnKs7KsUqMOg3jlCukjubZ1afHi1T8GgVtNg3vvISYhS2Jk_vkVbdqPJOTOKHwyB-JCvdTLt7le4fi-mUQYBSOIxrSqykNGBwTci70BIZdGpUJNifdjYk7wtu6vV2ZBsF2cHYcExRBE7oT7bM1Z-0Cni-UYyZScX-EbiM6rTXf1WEx2wdInyl2y_Lk4A"; 
	//token value to be placed here;
	$basURL = "https://api.myfatoorah.com";

	if ( isset($_GET["orderId"]) ){
		$invoiceArray = [
		"Key" => $_GET["orderId"],
		"KeyType" => 'invoiceId'
		];
	}else{
		$invoiceArray = [
		"Key" => $_GET["paymentId"],
		"KeyType" => 'paymentId'
		];
	}
	
	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "$basURL/v2/GetPaymentStatus",
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => json_encode($invoiceArray),
	  CURLOPT_HTTPHEADER => array("Authorization: Bearer $token","Content-Type: application/json"),
	));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);
	if ($err) {
		echo "cURL Error #:" . $err;
		header("LOCATION: ?order=fail");
		die();
	}else{
		$resultMY = json_decode($response, true);
		$orderId = $resultMY["Data"]["InvoiceId"];
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
}

?>