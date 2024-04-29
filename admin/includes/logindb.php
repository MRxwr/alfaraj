<?php
session_start ();
include_once ("config.php");

$email = $_POST["email"];
$password = $_POST["password"];
$password = sha1($password);

$userType = "0";
$sql = "SELECT * FROM `adminstration` WHERE `email` = ? AND `password` = ?";
$stmt = $dbconnect->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();
if ( $result->num_rows < 1 ){
	$userType = "1";
	$sql = "SELECT * 
        FROM `employees` 
        WHERE 
        `email` LIKE ? 
        AND 
        `password` LIKE ?
        AND 
        `hidden` != 1";
	$stmt = $dbconnect->prepare($sql);
	$stmt->bind_param("ss", $email, $password);
	$stmt->execute();
	$result = $stmt->get_result();
	if ( $result->num_rows < 1 ){
		$userType = "2";
	}
}
$row = $result->fetch_assoc();

$GenerateNewCC = md5(rand());
$coockiecode = $GenerateNewCC ;

if ( $userType == 0 ){
	$sql = "UPDATE adminstration SET keepMeAlive = ? WHERE email = ? AND password = ?";
	$stmt = $dbconnect->prepare($sql);
	$stmt->bind_param("sss", $coockiecode, $email, $password);
	$stmt->execute();
	$_SESSION["CreateKWUALFARAJ"] = $email;
	header("Location: ../index.php");
	setcookie("CreateKWUALFARAJ", $GenerateNewCC, time() + (86400*30 ), "/");
	exit();
}elseif ($userType == 1 ){
	$sql = "UPDATE employees SET keepMeAlive = ? WHERE email like ? AND password like ?";
	$stmt = $dbconnect->prepare($sql);
	$stmt->bind_param("sss", $coockiecode, $email, $password);
	$stmt->execute();
	$_SESSION["CreateKWUALFARAJ"] = $email;
	header("Location: ../index.php");
	setcookie("CreateKWUALFARAJ", $GenerateNewCC, time() + (86400*30 ), "/");
	exit();
}else{
	echo "try again";
	header("Location: ../login.php?error=p");
	exit();
}

?>