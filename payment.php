<?php
session_start();
header('Content-type: application/json');
require("admin/includes/config.php");

$courseId = $_POST["courseId"];
$paymentMethod = $_POST["paymentMethod"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$name = $_POST["name"];
$nationality = $_POST["nationality"];
$qualification = $_POST["qualification"];
die("1");
if ( $courses = selectDBNew("courses",[$courseId],"`id` = ?", "") ){
	$title = $courses[0]["enTitle"];
	$instructor = $courses[0]["instructor"];
	$discount = $courses[0]["discount"];
	$startDate = $courses[0]["startDate"];
	$endDate = $courses[0]["endDate"];
	$price = (FLOAT)( ( 1 - ( $discount / 100) ) * $courses[0]["price"] );
	$price = ( $price == 0 ) ? 1 : $price;
}else{
	header("LOCATION: Faliure.php");die();
}

if( $instructors = selectDBNew("instructors",[$instructor,$instructor],"`enName` = ? OR `arName` = ?", "") ){
	$instructorId = $instructors[0]["id"];
}else{
	$instructorId = 0;
}

$details = array(
	"course" => $title,
	"courseId" => $courseId,
	"instructor" => $instructor,
	"price" => $price,
	"discount" => $discount,
	"nationalty" => $nationality,
	"name" => $name,
	"email" => $email,
	"phone" => $phone,
	"qualification" => $qualification,
	"paymentMethod" => $paymentMethod,
	"orderId" => $orderId,
	"startDate" => $startDate,
	"endDate" => $endDate,
	"instructorId" => $instructorId,
	"status" => 2,
	"type" => 1,
	"InvoiceItems" => array(
		array(
			"ItemName" => "{$title} [{$name}] [{$phone}]",
			"Quantity" => 1,
			"UnitPrice" => (float)(( 1- ($discount / 100) ) * $price),
		)
	),
);
die("we are here");
if( $payment = createAPI($details) ){
	header("LOCATION: " . $payment);die();
}else{
	header("LOCATION: Faliure.php");die();
}
?>