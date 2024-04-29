<?php
session_start();
function selectDB($table, $where){
    GLOBAL $dbconnect;
    $check = [';', '"'];
    $where = str_replace($check, "", $where);
    $sql = "SELECT * FROM `{$table}`";
    if (!empty($where)) {
        $sql .= " WHERE {$where}";
    }
    if ($stmt = $dbconnect->prepare($sql)) {
        $stmt->execute();
        $result = $stmt->get_result();
        $array = array();
        while ($row = $result->fetch_assoc()) {
            $array[] = $row;
        }
        if (isset($array) && is_array($array)) {
            return $array;
        } else {
            return 0;
        }
    } else {
        $error = array("msg" => "select table error");
		return 0;
    }
}

if ( isset($_COOKIE["CreateKWUALFARAJ"]) && !empty($_COOKIE["CreateKWUALFARAJ"]) ){
	$svdva = $_COOKIE["CreateKWUALFARAJ"];
	if ( $user = selectDB("adminstration","`keepMeAlive` LIKE '{$svdva}'") ) {
		$userID = $user[0]["id"];
		$email = $user[0]["email"];
		$username = $user[0]["fullName"];
		$_SESSION['CreateKWUALFARAJ'] = $email;	
	}elseif( $user = selectDB("employees","`keepMeAlive` LIKE '{$svdva}'") ){
		$userID = $user[0]["id"];
		$email = $user[0]["email"];
		$username = $user[0]["fullName"];
		$_SESSION['CreateKWUALFARAJ'] = $email;	
	}else{
		header("Location: logout.php");die();
	}
}else{
	header("Location: logout.php");die();
}
?>