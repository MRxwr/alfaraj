<?php
if ( isset ( $_COOKIE["CreateKWUALFARAJ"] ) ){
	session_start ();
	require ("config.php");
	
	$svdva = $_COOKIE["CreateKWUALFARAJ"];
	/*
	$sql = "SELECT * 
			FROM `adminstration` 
			WHERE `keepMeAlive` LIKE '%".$svdva."%'";
	$result = $dbconnect->query($sql);
	*/
	$sql = "SELECT * 
			FROM `adminstration` 
			WHERE `keepMeAlive` LIKE ?";
	$stmt = $dbconnect->prepare($sql);
	$svdvaParam = '%' . $svdva . '%';
	$stmt->bind_param("s", $svdvaParam);
	$stmt->execute();
	$result = $stmt->get_result();
	// Check if there is one row returned
	if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		$userID = $row["id"];
		$email = $row["email"];
		$username = $row["fullName"];
		$_SESSION['CreateKWUALFARAJ'] = $email;	
	}else{
		$sql = "SELECT * 
				FROM `employees` 
				WHERE `keepMeAlive` LIKE ?";
		$stmt = $dbconnect->prepare($sql);
		$svdvaParam = '%' . $svdva . '%';
		$stmt->bind_param("s", $svdvaParam);
		$stmt->execute();
		$result = $stmt->get_result();
		/*
		$sql = "SELECT * 
				FROM `employees` 
				WHERE `keepMeAlive` LIKE '%".$svdva."%'";
		$result = $dbconnect->query($sql);
		*/
		if ( $result->num_rows == 1 ){
			$row = $result->fetch_assoc();
			$userID = $row["id"];
			$email = $row["email"];
			$username = $row["fullName"];
			$_SESSION['CreateKWUALFARAJ'] = $email;	
		}else{
			header("Location: logout.php");
		}
	}
}
elseif ( !isset ( $_COOKIE["CreateKWUALFARAJ"] ) ){
	header("Location: login.php");
}
?>