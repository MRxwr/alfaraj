<?php
require('admin/includes/config.php');
require('language.php');
if( isset($_GET["requested_order_id"]) && !empty($_GET["requested_order_id"]) ){
	if( $checkingOrder = checkCreateAPI() ){
		if( $checkingOrder["type"] == 1 ){
			header("LOCATION: Success.php?orderId=".$checkingOrder["orderId"]);die();
		}else{
			header("LOCATION: index.php?check=success");die();
		}
	}else{
		header("LOCATION: Faliure.php");die();
	}
}
if ( strpos($_SERVER['REQUEST_URI'],"index") OR strlen($_SERVER['REQUEST_URI']) == 1 ){
	$activeHome = "active";
	$activeAbout = "";
	$activeServices = "";
	$activeCourses = "";
	$activeCredits = "";
	$activeMedia = "";
	$activeContact = "";
}elseif ( strpos($_SERVER['REQUEST_URI'],"About") ){
	$activeHome = "";
	$activeAbout = "active";
	$activeServices = "";
	$activeCourses = "";
	$activeCredits = "";
	$activeMedia = "";
	$activeContact = "";
}elseif ( strpos($_SERVER['REQUEST_URI'],"courses") ){
	$activeHome = "";
	$activeAbout = "";
	$activeServices = "";
	$activeCourses = "active";
	$activeCredits = "";
	$activeMedia = "";
	$activeContact = "";
}elseif ( strpos($_SERVER['REQUEST_URI'],"Clients") ){
	$activeHome = "";
	$activeAbout = "";
	$activeServices = "";
	$activeCourses = "";
	$activeCredits = "active";
	$activeMedia = "";
	$activeContact = "";
}elseif ( strpos($_SERVER['REQUEST_URI'],"media") ){
	$activeHome = "";
	$activeAbout = "";
	$activeServices = "";
	$activeCourses = "";
	$activeCredits = "";
	$activeMedia = "active";
	$activeContact = "";
}elseif ( strpos($_SERVER['REQUEST_URI'],"contact") ){
	$activeHome = "";
	$activeAbout = "";
	$activeServices = "";
	$activeCourses = "";
	$activeCredits = "";
	$activeMedia = "";
	$activeContact = "active";
}elseif ( strpos($_SERVER['REQUEST_URI'],"Services") ){
	$activeHome = "";
	$activeAbout = "";
	$activeServices = "active";
	$activeCourses = "";
	$activeCredits = "";
	$activeMedia = "";
	$activeContact = "";
}else{
	$activeHome = "";
	$activeAbout = "";
	$activeServices = "";
	$activeCourses = "";
	$activeCredits = "";
	$activeMedia = "";
	$activeContact = "";
}

?>
<!DOCTYPE html>
<html lang="en" dir="<?php echo $directionHTML ?>">
<head>
<meta charset=utf-8>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="img/Group 1.png" rel="shortcut icon" />
<title>Al-Farag Group</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/owl.carousel.min.css" rel="stylesheet">
<link href="css/bootstrap-datepicker.css" rel="stylesheet" >
<link href="css/bootstrap-select.min.css" rel="stylesheet">
<link href="css/custome.css?x=19" rel="stylesheet">
<link href="css/responsive.css?y=2" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">


<style>
* {
	font-family: 'Tajawal', sans-serif;
}
html {
	font-family: 'Tajawal', sans-serif;
}
h2,h1,h3,h3,h5,h6,div.li,a {
	font-family: 'Tajawal', sans-serif !important; 
}

select{
	min-height: 47px;
}
p{
	font-size:16px!important;
	font-weight: 700;
}
.slider:before{
	background-color: transparent !important;
}
#colHead{
	background-color: #095877;
	font-size:22px;
	font-weight: 700;
	color:white;
	margin-bottom:22px
}
</style>
</head>

<body class="rtl <?php if($directionHTML == "ltl" ){echo "left-to-right";} ?>" id="body">

<div class="header-line">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <p>Take Your Training To A Higher Altitude</p>
				<form method="post" action="">
                <select class="selectpicker" data-width="fit" onchange="this.form.submit()" name="lang">
					<option selected disabled ><?php echo $language ?></option>
                  <option value="ENG">English</option>
                  <option value="AR">عربي</option>
                </select>
				</form>
            </div>
        </div>
    </div>
</div>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a class="navbar-brand p-0" href="index.php">
                        <img src="img/logonew1.svg" class="logo m-2" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav pl-0 pr-0">
                          <li class="nav-item">
                           <a class="nav-link <?php echo $activeHome ?>" style="font-size: 15px;" href="index.php"> 
							 <strong><?php echo $home ?></strong></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link <?php echo $activeAbout ?>" style="font-size: 15px;" href="About-us.php"><strong><?php echo $aboutUs ?></strong></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link <?php echo $activeServices ?>" style="font-size: 15px;" href="Services.php"><strong><?php echo $services ?></strong></a>
                          </li>
						   <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo $activeCourses ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px;" href="#"><strong><?php echo $COURSES ?></strong></a>
							<?php
							if ( $directionHTML == "rtl" ){
								$style = "text-align: right;";
							}else{
								$style = "";
							}
							?>
							   <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="<?php echo $style ?>">
								  <a class="dropdown-item" href="courses.php?id=0"><?php echo $Specialistdiplomatext ?></a>
								  <a class="dropdown-item" href="courses.php?id=1"><?php echo $Coursesandtrainingprogramstext ?></a>
								  <a class="dropdown-item" href="courses.php?id=2"><?php echo $Conferencesandexhibitionstext ?></a>
								  <a class="dropdown-item" href="courses.php?id=3"><?php echo $Paneldiscussionsandworkshopstext ?></a>
								</div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link <?php echo $activeCredits ?>" style="font-size: 15px;" href="Clients.php"><strong><?php echo $clients ?></strong></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link <?php echo $activeMedia ?>" style="font-size: 15px;" href="media-center.php"><strong><?php echo $mediaCenter ?></strong></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link <?php echo $activeContact ?>" style="font-size: 15px;" href="contact.php"><strong><?php echo $contact ?></strong></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link"  href="#" data-toggle="modal" data-target="#consultationModal" ><button type="submit" style="font-size: 15px;" class="btn header-btn consultationModal"><strong><?php echo $consultation ?></strong></button></a>
                          </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>