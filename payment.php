<?php
session_start();
header('Content-type: application/json');
require("admin/includes/config.php");

$courseId = $_POST["courseId"];
$paymentMethod = $_POST["paymentMethod"];
if ( $paymentMethod == 3 ){
	$paymentMethod = 1;
	$free = 1;
}elseif( $paymentMethod == 4 ){
	$paymentMethod = 1;
	$free = 2;
}else{
	$paymentMethod = $_POST["paymentMethod"];
	$free = 0;
}
$phone = $_POST["phone"];
$email = $_POST["email"];
$name = $_POST["name"];
$nationality = $_POST["nationality"];
$qualification = $_POST["qualification"];

/*
$sql = "SELECT *
		FROM `courses`
		WHERE `id` LIKE '".$courseId."'";
$result = $dbconnect->query($sql);
$row = $result->fetch_assoc();
*/
// Prepare the SQL statement
$sql = "SELECT *
        FROM `courses`
        WHERE `id` = ?";
$stmt = $dbconnect->prepare($sql);
$stmt->bind_param("i", $courseId);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();

$title = $row["enTitle"];
$instructor = $row["instructor"];
$discount = $row["discount"];
$startDate = $row["startDate"];
$endDate = $row["endDate"];
if ( $row["discount"] != 0 ){
	$price = $row["price"] - ($row["price"] * $row["discount"] / 100 );
}else{
	$price = $row["price"];
}

if ( $price == 0 ){
	$price = 1;
	$returnPrice = 0;
}
/*
$sql = "SELECT *
		FROM `instructors`
		WHERE
		`enName` LIKE '".$instructor."'
		OR
		`arName` LIKE '".$instructor."'
		";
$result = $dbconnect->query($sql);
$row = $result->fetch_assoc();
*/
// Prepare the SQL statement
$sql = "SELECT *
        FROM `instructors`
        WHERE
        `enName` LIKE ?
        OR
        `arName` LIKE ?";
$stmt = $dbconnect->prepare($sql);
$instructorParam = '%' . $instructor . '%';
$stmt->bind_param("ss", $instructorParam, $instructorParam);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();

$instructorId = $row["id"];

$token = "hE-2B3TuAQ-ea717-mLkkfajc240Eh4PmRFLRugNAw3aQMTfsNaL9_IsHPKEYQ7P7Ov7AyXRk_JRTOEOP9aNt6KbOx5bWU7P60vqFEHyMSqGXMyTyFzR7knj9eJukd-fr2VKK0Ti0Xic2z7dmYeZAQ8gZd_LOmDHy8kMqBaL6Sgom0HRGJxNXy8dIqcyVe2vgJ5fjE40NzrTKktY9E5_3ELgTi5qFgAZTDk76WmblxT36oCZqAs2BxhBVD2-3uQbrEN3FtdQ8sladuRF5CX4znVQ7eSXZ1UyzcDiW2FqyNVbU2JasG9MC2u8Cz5xLKO1dU8PDXaETqeDJ-8DLxQ-1fed7NqJKSPnGOMwSrSRDIzCqRtqeXVVaqgngy0GDM88NRusZmBq73zqao577UfZcGjNGo-hlbPYS_0gYm-fAla0OkZeZjAJCgrDNTu0L1As0P27crSu2LUl6MNZn5iHkd1lUiCnRPwE7Ppky1C_t-l6lCuQcv-hkV9fv-EbcsIdnhBZhzG7_QG9jEZVjpj_FxcSTlv0EraCdI9O4rd0-pYesfbEEAE6YseARJ4iRXXVOYzy_lMLqGfu1kw_bOjJp1VPCMJA78N6uIh9PFdozgfBq6-UkDTCOEnozsRsILfO96buzhRRF0Czkde4NvBzt7jAPoqbEFcOn4mwzkLa_qDPOoVMOsQc12Vgcsb7klV0ktRJBA"; 

//$token = "rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL"; 
#token value to be placed here;
$basURL = "https://api.myfatoorah.com";


$allItems[] = array(
					"ItemName"=>$title,
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
"CallBackUrl"=> "http://alfaraj.co/Success.php",
"ErrorUrl"=> "http://alfaraj.co/Faliure.php",
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
		if( $counter < 10 ){
			$counter = $counter + 1;
		}else{
			goto jump;
		}
	}
	
	if ( $free == 0 ){
		if ( $_POST["paymentMethod"] == 1 ){
			$paymentMethod = 1;
		}elseif ( $_POST["paymentMethod"] == 2 ){
			$paymentMethod = 2; 
		}
	}elseif ( $free == 1 ){
		$paymentMethod = 3;
	}elseif ( $free == 2 ){
		$paymentMethod = 4;
	}
	if ( isset($returnPrice) ){
		$price = 0 ;
	}
	/*
	$sql = "INSERT INTO `invoices`
			(`course`, `courseId`, `instructor`, `price`, `discount`, `nationalty`, `name`, `email`, `phone`, `qualification`,`paymentMethod`,`orderId`, `startDate`, `endDate`, `instructorId`, `status`)
			VALUES 
			('".$title."', '".$courseId."', '".$instructor."', '".$price."', '".$discount."', '".$nationality."', '".$name."', '".$email."', '".$phone."', '".$qualification."', '".$paymentMethod."', '".$orderId."', '".$startDate."', '".$endDate."', '".$instructorId."', '2')
			";
	$result = $dbconnect->query($sql);
	*/
	$status = 2;
	$sql = "INSERT INTO `invoices`
        (`course`, `courseId`, `instructor`, `price`, `discount`, `nationalty`, `name`, `email`, `phone`, `qualification`, `paymentMethod`, `orderId`, `startDate`, `endDate`, `instructorId`, `status`)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $dbconnect->prepare($sql);
	$stmt->bind_param("ssssssssssssssss", $title, $courseId, $instructor, $price, $discount, $nationality, $name, $email, $phone, $qualification, $paymentMethod, $orderId, $startDate, $endDate, $instructorId, $status);
	$stmt->execute();
	if ( $free == 0 ){
		if ( $_POST["paymentMethod"] == 1 ){
			header("LOCATION: " . $resultMY["Data"]["PaymentURL"]) ;
		}elseif ( $_POST["paymentMethod"] == 2 ){
			header("LOCATION: " . $resultMY["Data"]["PaymentURL"]) ;
		}
	}elseif ( $free == 1 ){
		header("LOCATION:http://alfaraj.co/Success.php?orderId=" . $orderId);
	}elseif ( $free == 2 ){
		header("LOCATION:http://alfaraj.co/Success.php?orderId=" . $orderId);
	}
}

?>