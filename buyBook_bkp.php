<?php
session_start();
header('Content-type: application/json');
require("admin/includes/config.php");
$book = $_POST["book"];
$paymentMethod = '1';
$phone = $_POST["phone1"];
$email = $_POST["email1"];
$name = $_POST["name1"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];

if ( $book == 1 ){
	$price = 5;
}else{
	$price = 10+3;
}

$token = "hE-2B3TuAQ-ea717-mLkkfajc240Eh4PmRFLRugNAw3aQMTfsNaL9_IsHPKEYQ7P7Ov7AyXRk_JRTOEOP9aNt6KbOx5bWU7P60vqFEHyMSqGXMyTyFzR7knj9eJukd-fr2VKK0Ti0Xic2z7dmYeZAQ8gZd_LOmDHy8kMqBaL6Sgom0HRGJxNXy8dIqcyVe2vgJ5fjE40NzrTKktY9E5_3ELgTi5qFgAZTDk76WmblxT36oCZqAs2BxhBVD2-3uQbrEN3FtdQ8sladuRF5CX4znVQ7eSXZ1UyzcDiW2FqyNVbU2JasG9MC2u8Cz5xLKO1dU8PDXaETqeDJ-8DLxQ-1fed7NqJKSPnGOMwSrSRDIzCqRtqeXVVaqgngy0GDM88NRusZmBq73zqao577UfZcGjNGo-hlbPYS_0gYm-fAla0OkZeZjAJCgrDNTu0L1As0P27crSu2LUl6MNZn5iHkd1lUiCnRPwE7Ppky1C_t-l6lCuQcv-hkV9fv-EbcsIdnhBZhzG7_QG9jEZVjpj_FxcSTlv0EraCdI9O4rd0-pYesfbEEAE6YseARJ4iRXXVOYzy_lMLqGfu1kw_bOjJp1VPCMJA78N6uIh9PFdozgfBq6-UkDTCOEnozsRsILfO96buzhRRF0Czkde4NvBzt7jAPoqbEFcOn4mwzkLa_qDPOoVMOsQc12Vgcsb7klV0ktRJBA"; 

//$token = "rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL"; 
#token value to be placed here;
$basURL = "https://api.myfatoorah.com";

$allItems[] = array(
					"ItemName"=>$book,
					"Quantity"=>1,
					"UnitPrice"=>(float)$price
					);

//print_r($allItems);die();

$postMethodLines = array(
"PaymentMethodId" => $paymentMethod,
"CustomerName"=>  $name,
"DisplayCurrencyIso"=> "KWD", 
"CustomerMobile"=> substr($phone,0,11),
"CustomerEmail"=> str_replace(" ","",$email),
"InvoiceValue"=> (float)$price,
"CallBackUrl"=> "http://alfaraj.co/?check=success",
"ErrorUrl"=> "http://alfaraj.co/?check=fail",
"Language"=> "en",
"CustomerReference" =>'ref0012',
"SupplierCode"=> '12',
);
for ( $i = 0; $i < (sizeof($allItems)) ; $i++  )
{
	$postMethodLines["InvoiceItems"][$i] = $allItems[$i];
}

//print_r($postMethodLines);die();
$counter = 1;
jump:
####### Execute Payment ######
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "$basURL/v2/ExecutePayment",
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($postMethodLines),
  CURLOPT_HTTPHEADER => array("Authorization: Bearer $token","Content-Type: application/json"),
));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
	$resultMY = json_decode($response, true);
	//echo print_r($resultMY);die();
	$orderId = $resultMY["Data"]["InvoiceId"];
	if ( empty($orderId) ){
		if( $counter == 10 ){
			break;
		}else{
			$counter = $counter + 1;
		}
		goto jump;
	}
	/*
	$sql = "INSERT INTO `bookInvoices`
			( `book`, `name`, `phone`, `email`, `address1`, `address2`, `price`, `orderId`, `status`)
			VALUES 
			('".$book."', '".$name."', '".$phone."', '".$email."', '".$address1."', '".$address2."', '".$price."', '".$orderId."', '2')
			";
	$result = $dbconnect->query($sql);
	*/
	$status = 2;
	$sql = "INSERT INTO bookInvoices (book, name, phone, email, address1, address2, price, orderId, status) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $dbconnect->prepare($sql);
	$stmt->bind_param("sssssssss", $book, $name, $phone, $email, $address1, $address2, $price, $orderId, $status);
	$stmt->execute();
	header("LOCATION: " . $resultMY["Data"]["PaymentURL"]) ;
}

?>