

<?php

$sourceFilePath = '/home/u828850633/domains/alfaraj.co/public_html/test.php';
$destinationFilePath = '/home/u671249433/domains/createkwservers.com/public_html/test.php';

$command = "cp \"$sourceFilePath\" \"$destinationFilePath\"";
exec($command, $output, $returnCode);

if ($returnCode === 0) {
    echo "File copied successfully.";
} else {
    echo "Error copying file: The command returned an error with code $returnCode. Output: " . implode("\n", $output);
}

/*
<form method="post" action="">
<input name="day" type="text" value="Sunday">
<input name="submit" type="submit" value="ok">
</form>
if ( isset($_POST["day"]) ){
	date_default_timezone_set('Asia/Kuwait');
	$todaysDate = $_POST["day"];
	$day = strtotime($todaysDate);
	$day = date("l",$day);
	$newDay = $day;
	for ( $i = 0 ; $i < 7 ; $i++ ){
		if ( strtolower($newDay) == strtolower($day) ){
			for ( $y = 0 ; $y < 4 ; $y++ ){
				$dates[] = $todaysDate ;
				$todaysDate = date_create($todaysDate);
				date_modify($todaysDate,"+7 days");
				$todaysDate = date_format($todaysDate,"Y/m/d");
			}
		}
		$todaysDate = date_create($todaysDate);
		date_modify($todaysDate,"+1 days");
		$todaysDate = date_format($todaysDate,"Y/m/d");
		$day = strtotime($todaysDate);
		$day = date("l",$day);
	}
	echo implode(",",$dates);
}

///////////
if ( isset($_POST["day"]) ){
	$output = "";
	$day = "";
	$todaysDate = array();
	date_default_timezone_set('Asia/Kuwait');
	$todaysDate[] = $_POST["day"];
	for ( $j=0; $j < sizeof($todaysDate) ; $j++ ){
		$newDay = $todaysDate[$j];
		for ( $i = 0 ; $i < 7 ; $i++ ){
			if ( strtolower($newDay) == strtolower($day) ){
				for ( $y = 0 ; $y < 4 ; $y++ ){
					$todayssDate = date_create($todayssDate);
					date_modify($todayssDate,"+7 days");
					$todayssDate = date_format($todayssDate,"Y/m/d");
					$dates[] = $todayssDate ;
				}
			}
			$todayssDate = date_create($todaysDate[$j]);
			date_modify($todayssDate,"+1 days");
			$todayssDate = date_format($todayssDate,"Y/m/d");
			$day = strtotime($todayssDate);
			echo $newDay = date("l",$day);
		}
	}
	$y=0;
	for ( $i=0 ; $i < sizeof($todaysDate) ; $i++ ){
		$output .= '<option disabled >'.$todaysDate[$i].'</option>';
		for ( $j=$y ; $j < 4+$y ; $j++ ){
			$output .= '<option>'.$dates[$j].'</option>';
		}
		$y = $y+4;
	}
	echo $output;
}
*/
?>