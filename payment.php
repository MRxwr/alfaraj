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

$token = "Fj9A6M-ouf41gJB6Q6Ir6kfVQRZP5pv8Cf5CSAJHELXTMp6BiWRx5zn0vX2Bh-LDCnQ6Al6bw7rr2l0lNz1zi0ZsqAiTj8WuyDkphVdRV9bxooU0uKgX-tvPOFnK4q5wLJwu7afJ5Z4CD2Lnb4IBtNlNDtBBRllAnCR2X34NRoj-xm9e78iyQNZyq50Ae9O5xrzG3jYODBHqU5sjpsokL1KyE8R0DXGcTjIDKre4MDUSubOFQHeXGh9hDVd1Kfts95WM1BbUiFyZDPwreY3uez62TgySfEVdIWDJvCdUi2IihjprCHDFip4ql2L8snGIoGCMgUl6bugVwYgtjmpA63DPbrAfbzTTGsEI7f7nF1nHpfwzIwNab233_1nFmP7bF1v4bsnTpoRYGpZG09XLAx3QNovxnT2sVhgU8JTj3oS5uz71sYniVSix5yb3ZMMbBQSs4LAAJdMmxC2MQxvixZ59_Ls-d_X8VNJxiPcVwUWzHLnWOsArXVJzR_ewewuuT1ybPdTZTmSnKs7KsUqMOg3jlCukjubZ1afHi1T8GgVtNg3vvISYhS2Jk_vkVbdqPJOTOKHwyB-JCvdTLt7le4fi-mUQYBSOIxrSqykNGBwTci70BIZdGpUJNifdjYk7wtu6vV2ZBsF2cHYcExRBE7oT7bM1Z-0Cni-UYyZScX-EbiM6rTXf1WEx2wdInyl2y_Lk4A"; 

//$token = "rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL"; 
#token value to be placed here;
$basURL = "https://api.myfatoorah.com";
$allItems[] = array(
					"ItemName"=>$title,
					"Quantity"=>1,
					"UnitPrice"=>(float)$price
					);

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