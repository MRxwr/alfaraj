<?php
require("admin/includes/config.php");
$book = $_POST["book"];
$paymentMethod = '1';
$phone = $_POST["phone1"];
$email = $_POST["email1"];
$name = $_POST["name1"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$price = ( $book == 1 ) ? 5 : 13 ;
$details = array(
	"book" => $book,
	"name" => $name,
	"phone" => $phone,
	"email" => $email,
	"address1" => $address1,
	"address2" => $address2,
	"price" => $price,
	"InvoiceItems" => array(
		array(
			"ItemName"=>$book,
			"Quantity"=>1,
			"UnitPrice"=>(float)$price
		),
	),
	"type" => 2,
	"status" => 2,
	"paymentMethod" => 1,
);
die();
if( $payment = createAPI($details) ){
	header("LOCATION: " . $payment);die();
}else{
	header("LOCATION: Faliure.php");die();
}

?>