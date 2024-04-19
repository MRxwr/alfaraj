<?php
require('admin/includes/config.php');
require('language.php');

if ( isset($_POST["itemId"] ) ){
	/*
	$sql = "SELECT * FROM `courses` WHERE `id` LIKE '".$_POST["itemId"]."'";
	$result = $dbconnect->query($sql);
	*/
	$stmt = $dbconnect->prepare("SELECT * FROM `courses` WHERE `id` = ?");
	$stmt->bind_param("s", $_POST["itemId"]);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
	list($st1, $st2) = explode(" ", $row["startDate"] );
	list($ed1, $ed2) = explode(" ", $row["endDate"] );
	$price = $row["price"] - ($row["price"]*$row["discount"]/100);
	$numberOfLecture = $row["noOfLectures"];
	$instructor = $row["instructor"];
	$image = $row["image"];
	$free = $row["free"];
	if ( $directionHTML == "rtl" ){
		$title = $row["arTitle"];
		$details = $row["arDetails"];
	}else{
		$title = $row["enTitle"];
		$details = $row["enDetails"];
	}
	/*
	$sql = "SELECT * FROM `instructors` WHERE `enName` LIKE '%".$instructor."%'";
	$result = $dbconnect->query($sql);
	*/
	$sql = "SELECT * FROM `instructors` WHERE `enName` LIKE ?";
	$stmt = $dbconnect->prepare($sql);
	$stmt->bind_param("s", $instructor);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
	if ( $directionHTML == "rtl" ){
		$cTeacher = $row["arName"];
		$cTeacherToolTip = $row["arDetails"];
	}else{
		$cTeacher = $row["enName"];
		$cTeacherToolTip = $row["enDetails"];
	}
	
	echo $output = $title . "^" . $details . "^" . $cTeacher . "^" . $numberOfLecture . "^" . $st1 . " -> " . $ed1 . "^" . $price . "^" . $image . "^" . strip_tags($cTeacherToolTip) . "^" . $free;
}

if ( isset($_POST["booking"]) ){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$type = $_POST["type"];
	$conDate = $_POST["conDate"];
	$time = $_POST["time"];
	/*
	echo $sql = "INSERT INTO `bookings`
			(`name`, `email`, `phone`, `type`, `conDate`, `time`)
			VALUES
			('".$name."', '".$email."', '".$phone."', '".$type."', '".$conDate."', '".$time."')
			";
	$result = $dbconnect->query($sql);
	*/
	$sql = "INSERT INTO `bookings`
        (`name`, `email`, `phone`, `type`, `conDate`, `time`)
        VALUES
        (?, ?, ?, ?, ?, ?)";
	$stmt = $dbconnect->prepare($sql);
	$stmt->bind_param("ssssss", $name, $email, $phone, $type, $conDate, $time);
	$result = $stmt->execute();
}

if ( isset($_POST["conType"]) AND !isset($_POST["conDate"]) ){
	date_default_timezone_set('Asia/Kuwait');
	$output = "";
	$todaysDate = date_create($todaysDate);
	$todaysDate = date_format($todaysDate,"Y/m/d");
	$day = strtotime($todaysDate);
	$day = date("l",$day);
	/*
	$sql = "SELECT *
			FROM `consultation`
			WHERE `type` LIKE '%".$_POST["conType"]."%'
			GROUP BY `day`
			";
	$result = $dbconnect->query($sql);
	*/
	$sql = "SELECT *
			FROM `consultation`
			WHERE `type` LIKE ?
			GROUP BY `day`";
	$stmt = $dbconnect->prepare($sql);
	$stmt->bind_param("s", $conType);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()){
		$todaysDay[] = $row["day"];
	}
	for ( $j=0; $j < sizeof($todaysDay) ; $j++ ){
		$newDay = $todaysDay[$j];
		$todayssDate = date("Y/m/d");
		for ( $i = 0 ; $i < 7 ; $i++ ){
			if ( strtolower($newDay) == strtolower($day) ){
				for ( $y = 0 ; $y < 4 ; $y++ ){
					$todayssDate = date_create($todayssDate);
					date_modify($todayssDate,"+7 days");
					$todayssDate = date_format($todayssDate,"Y/m/d");
					$dates[] = $todayssDate ;
				}
			}
			$todayssDate = date_create($todayssDate);
			date_modify($todayssDate,"+1 days");
			$todayssDate = date_format($todayssDate,"Y/m/d");
			$day = strtotime($todayssDate);
			$day = date("l",$day);
		}
	}
	$y=0;
	for ( $i=0 ; $i < sizeof($todaysDay) ; $i++ ){
		$output .= '<option disabled >'.$todaysDay[$i].'</option>';
		for ( $j=$y ; $j < 4+$y ; $j++ ){
			$output .= '<option>'.$dates[$j].'</option>';
		}
		$y = $y+4;
	}
	echo $output;
}

if ( isset($_POST["conDate"]) AND isset($_POST["conType"]) ){
	date_default_timezone_set('Asia/Kuwait');
	$output = "";
	$todaysDate = $_POST["conDate"];
	$day = strtotime($todaysDate);
	$day = date("l",$day);
	/*
	$sql = "SELECT *
			FROM `consultation`
			WHERE
			`type` LIKE '%".$_POST["conType"]."%'
			AND
			`day` LIKE '%".$day."%'
			";
	$result = $dbconnect->query($sql);
	*/
	$sql = "SELECT * FROM `consultation` 
        WHERE `type` LIKE ? AND `day` LIKE ?";
	$stmt = $dbconnect->prepare($sql);
	$stmt->bind_param("ss", $conType, $day);
	$stmt->execute();
	$result = $stmt->get_result();
	$output .= '<option disabled>Time</option>';
	while ($row = $result->fetch_assoc()){
		$output .= '<option>'.$row["time"].'</option>';
	}
	echo $output;
}
?>