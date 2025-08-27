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

$token = "Fj9A6M-ouf41gJB6Q6Ir6kfVQRZP5pv8Cf5CSAJHELXTMp6BiWRx5zn0vX2Bh-LDCnQ6Al6bw7rr2l0lNz1zi0ZsqAiTj8WuyDkphVdRV9bxooU0uKgX-tvPOFnK4q5wLJwu7afJ5Z4CD2Lnb4IBtNlNDtBBRllAnCR2X34NRoj-xm9e78iyQNZyq50Ae9O5xrzG3jYODBHqU5sjpsokL1KyE8R0DXGcTjIDKre4MDUSubOFQHeXGh9hDVd1Kfts95WM1BbUiFyZDPwreY3uez62TgySfEVdIWDJvCdUi2IihjprCHDFip4ql2L8snGIoGCMgUl6bugVwYgtjmpA63DPbrAfbzTTGsEI7f7nF1nHpfwzIwNab233_1nFmP7bF1v4bsnTpoRYGpZG09XLAx3QNovxnT2sVhgU8JTj3oS5uz71sYniVSix5yb3ZMMbBQSs4LAAJdMmxC2MQxvixZ59_Ls-d_X8VNJxiPcVwUWzHLnWOsArXVJzR_ewewuuT1ybPdTZTmSnKs7KsUqMOg3jlCukjubZ1afHi1T8GgVtNg3vvISYhS2Jk_vkVbdqPJOTOKHwyB-JCvdTLt7le4fi-mUQYBSOIxrSqykNGBwTci70BIZdGpUJNifdjYk7wtu6vV2ZBsF2cHYcExRBE7oT7bM1Z-0Cni-UYyZScX-EbiM6rTXf1WEx2wdInyl2y_Lk4A"; 
$basURL = "https://api.myfatoorah.com";

$allItems[] = array(
					"ItemName"=>$book,
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
	$orderId = $resultMY["Data"]["InvoiceId"];
	
	if ( empty($orderId) ){
		if( $counter < 10 ){
			$counter = $counter + 1;
		}else{
			goto jump;
		}
	}
	$status = 2;
	$sql = "INSERT INTO bookInvoices (book, name, phone, email, address1, address2, price, orderId, status) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $dbconnect->prepare($sql);
	$stmt->bind_param("sssssssss", $book, $name, $phone, $email, $address1, $address2, $price, $orderId, $status);
	$stmt->execute();
	header("LOCATION: " . $resultMY["Data"]["PaymentURL"]) ;
	
}

?>