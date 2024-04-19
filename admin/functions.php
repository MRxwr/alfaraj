<?php
//require ("template/header.php");
require ("includes/config.php");
require ("includes/translate.php");

if ( isset($_POST["type"]) ){
	$type = $_POST["type"];
	$day  = $_POST["day"];
	$time = $_POST["time"];
	/*
    $sql  = "INSERT INTO `consultation`
			(`type`, `day`, `time`)
			VALUES 
			('".$type."', '".$day."', '".$time."')
			";
    $result = $dbconnect->query($sql);
	*/
	$sql = "INSERT INTO `consultation`
			(`type`, `day`, `time`)
			VALUES
			(?, ?, ?)";
	$stmt = $dbconnect->prepare($sql);
	$stmt->bind_param("sss", $type, $day, $time);
	$stmt->execute();
	$stmt->close();
	
	$output = "";
	$i = 1;
	$sql = "SELECT * FROM `consultation`";
	$result = $dbconnect->query($sql);
	while ( $row = $result->fetch_assoc() ){
		$output .= '<tr><td class="txt-dark">'.str_pad($i,2,"0",STR_PAD_LEFT).'</td><td>'.$row["type"].'</td><td>'.$row["time"].'</td><td><a href="?delId='.$row["id"].'" class="font-18 txt-grey mr-10 pull-left" data-toggle="tooltip" data-placement="top" title="'.$delete.'"><i class="fa fa-times"></i></a><a href="?editId='.$row["id"].'" class="font-18 txt-grey mr-10 pull-left" data-toggle="tooltip" data-placement="top" title="'.$edit.'"><i class="fa fa-edit"></i></a></td></tr>';
		$i++;
	}
	
echo $output;
}

?>