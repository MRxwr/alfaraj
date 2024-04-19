<?php
if ( isset($_GET["paymentId"]) ){
	//$token = "rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL"; 
	
	$token = "hE-2B3TuAQ-ea717-mLkkfajc240Eh4PmRFLRugNAw3aQMTfsNaL9_IsHPKEYQ7P7Ov7AyXRk_JRTOEOP9aNt6KbOx5bWU7P60vqFEHyMSqGXMyTyFzR7knj9eJukd-fr2VKK0Ti0Xic2z7dmYeZAQ8gZd_LOmDHy8kMqBaL6Sgom0HRGJxNXy8dIqcyVe2vgJ5fjE40NzrTKktY9E5_3ELgTi5qFgAZTDk76WmblxT36oCZqAs2BxhBVD2-3uQbrEN3FtdQ8sladuRF5CX4znVQ7eSXZ1UyzcDiW2FqyNVbU2JasG9MC2u8Cz5xLKO1dU8PDXaETqeDJ-8DLxQ-1fed7NqJKSPnGOMwSrSRDIzCqRtqeXVVaqgngy0GDM88NRusZmBq73zqao577UfZcGjNGo-hlbPYS_0gYm-fAla0OkZeZjAJCgrDNTu0L1As0P27crSu2LUl6MNZn5iHkd1lUiCnRPwE7Ppky1C_t-l6lCuQcv-hkV9fv-EbcsIdnhBZhzG7_QG9jEZVjpj_FxcSTlv0EraCdI9O4rd0-pYesfbEEAE6YseARJ4iRXXVOYzy_lMLqGfu1kw_bOjJp1VPCMJA78N6uIh9PFdozgfBq6-UkDTCOEnozsRsILfO96buzhRRF0Czkde4NvBzt7jAPoqbEFcOn4mwzkLa_qDPOoVMOsQc12Vgcsb7klV0ktRJBA"; 
	//token value to be placed here;
	$basURL = "https://api.myfatoorah.com";

	$invoiceArray = [
		"Key" => $_GET["paymentId"],
		"KeyType" => 'paymentId'
	];
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
		//echo json_encode($resultMY); die();
		$orderId = $resultMY["Data"]["InvoiceId"];
		if ( $resultMY["Data"]["InvoiceStatus"] == "Paid" ){
			$sql = "UPDATE 
			`bookInvoices`
			SET 
			`status` = ?
			WHERE 
			`orderId` = ?";
			$stmt = $dbconnect->prepare($sql);
			$stmt->bind_param("is", $status, $orderId);
			$status = 0;
			$orderId = $orderId;
			$result = $stmt->execute();
			/*
			$sql = "UPDATE 
					`bookInvoices`
					SET 
					`status` = '0'
					WHERE 
					`orderId` = '".$orderId."'
					";
			$result = $dbconnect->query($sql);
			*/
			require('sEmail.php');
			$orderSet = 1;
		}else{
			$sql = "UPDATE `bookInvoices`
					SET `status` = '2'
					WHERE `orderId` = ?";
			$stmt = $dbconnect->prepare($sql);
			$stmt->bind_param("s", $orderId);
			$stmt->execute();
			/*
			$sql = "UPDATE 
					`bookInvoices`
					SET 
					`status` = '2'
					WHERE 
					`orderId` = '".$orderId."'
					";
			$result = $dbconnect->query($sql);
			*/
			$orderSet = 0;
		}
	}  
}

?>