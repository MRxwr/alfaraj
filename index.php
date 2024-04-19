<?php
include 'header.php';
include 'checkBookInvoice.php';
?>


<div class="slider">

    <a href="About-us.php" class="read-more rounded-circle" style="    position: absolute;
    padding: 30px 15px !important;
    bottom: 0;
    right: 0;
    font-weight: 700;
    font-size: 12px;
    background: white;"><?php echo $ReadMore ?></a>
    <a href="#mainsec2"><span class="fa fa-long-arrow-down scroll-arrow"></span></a>
</div>

<?php 
$sql = "SELECT * FROM `newandimportant` WHERE `id` LIKE '1'";
$result = $dbconnect->query($sql);
$row = $result->fetch_assoc();
$link0 = $row["link"];
if ( $directionHTML == "rtl" ){
	$details0 = $row["detailsAr"];
}else{
	$details0 = $row["details"];
}

$sql = "SELECT * FROM `newandimportant` WHERE `id` LIKE '2'";
$result = $dbconnect->query($sql);
$row = $result->fetch_assoc();
$formTarget = "?update=1";
$link1 = $row["link"];
if ( $directionHTML == "rtl" ){
	$details1 = $row["detailsAr"];
	$float = "float-right";
	$float1 = "float-left";
}else{
	$details1 = $row["details"];
	$float = "float-left";
	$float1 = "float-right";
}
?>
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-12 mt-3 p-3" >
<a href="<?php echo $link0 ?>" style="text-decoration: none;">
 <div class="p-3" style="border: 1px solid lightgray;border-radius: 5px;cursor: pointer;">
	<div class="clearfix">
	<i class="fa fa-bell <?php echo $float ?>" style="color:#d42a2a;font-size: 30px;"></i>
	<h3 class="mr-2 ml-2" style="display: inline-flex;color: darkblue;font-weight: 700;"> <?php echo $ImportantInformationtext ?></h3>
	
	<i class="fa fa-external-link <?php echo $float1 ?>" style="color:#095877;font-size: 30px;"></i>
	</div>
	<p style="color:#095877;"><?php echo $details0 ?></p>
 </div>
 </a>
 </div>
<div class="col-md-6 col-sm-12 mt-3 p-3">
<a href="<?php echo $link1 ?>" style="text-decoration: none;">
<div class="p-3" style="border: 1px solid lightgray;border-radius: 5px;cursor: pointer;">
	<div class="clearfix">
	<i class="fa fa-check-circle <?php echo $float ?>" style="color:#37bf1e;font-size: 30px;"></i>
	<h3 class="mr-2 ml-2" style="display: inline-flex;color: darkblue;font-weight: 700;"> <?php echo $WhatsNewtext ?> </h3>
	
	<i class="fa fa-external-link <?php echo $float1 ?>" style="color:#095877;font-size: 30px;"></i>
	
	</div>
	<p style="color:#095877;"><?php echo $details1 ?></p>
</div>
</a>
 </div>
</div>
</div>


<div class="sec-pad about-sec" id="mainsec2">
    <img src="img/image.svg" class="about-side-img">
    <div class="container">
        <div class="row form-row">
            <div class="col-12">
                <div class="title text-center">
                    <h2><?php echo $ALFarajGroup ?></h2>
                    <p class="mt-3"><?php echo $WhoAreWe ?></p>
                    <span class="underline"></span>
                </div>
            </div>
			<div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="group-box blue" style="height: 277px;">
                    <a href="#inspection"><img src="img/image3.svg" class="img-fluid" alt=""></a>
                    <p><?php echo $InspectionShipping ?></p>
                </div>
            </div>
			<div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="group-box black" style="height: 277px;">
                    <a href="#about"><img src="img/logo.svg" class="img-fluid" alt=""></a>
                    <p><?php echo $TomohInstitute1 ?></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="group-box brown" style="height: 277px;">
                    <a href="#international"><img src="img/image2.svg" class="img-fluid" alt=""></a>
                    <p><?php echo $IIG ?></p>
                </div>
            </div>

            

			<div class="col-md-3 col-sm-6 col-12 mb-3">
                <div class="group-box red" style="height: 277px;">
                    <a href="#AAA"><img src="img/logo-marine3.svg" class="img-fluid" alt=""></a>
                    <p><?php echo $AAAText ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sec-pad light-bg padding-bottom tab-section" id="inspection">
    <div class="container">
        <ul class="nav nav-pills tab-nav-pills pl-0 pr-0">
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link active" data-toggle="tab" href="#about1"><?php echo $about ?></a>
            </li>
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#activities1"><?php echo $services ?></a>
            </li>
			<li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#Gallery"><?php echo $SaleRentText ?></a>
            </li>
			<?php 
			$sql = "SELECT * FROM `courses` WHERE `company` = '2'  AND `hidden` = '0' ";
			$result = $dbconnect->query($sql);
			if ( $result->num_rows > 0 ){
				?>
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#courses1">TRAINING  COURSES</a>
            </li>
			<?php 
			}
			?>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="about1">
                <div class="row form-row d-flex align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <img src="img/image3.svg" class="img-fluid mb-4" alt="">
                        <p>
						<?php 
						// inspection about
						
						$sql = "SELECT * FROM `about` WHERE `id` = '1'";
						$result = $dbconnect->query($sql);
						$row = $result->fetch_assoc();
						if ( $directionHTML == "rtl" ){
							echo urldecode($row["inspectionAr"]);
						}else{
							echo urldecode($row["inspection"]);
						}
						?>
						</p>
                    </div>
                    <div class="col-lg-4 col-md-5 text-right" title="test">
                        <img src="img/shipping-min.PNG" class="img-fluid" alt="about" style="box-shadow: 0px 0px 14px 1px black;border-radius: 10px;">
                    </div>
                </div>
            </div>
            <div class="tab-pane container fade" id="activities1">
                <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold"><?php echo $services ?></h5>
                            <span class="underline"></span>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-12">
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $InsuranceConsultancy ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $ShipsPreview ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $ShipSaleLeasing ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $MaritimeMediation ?> </div>
            </div>
			<div class="col-lg-6 col-sm-12">
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $MaritimeTransportCharts ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $InsuranceForDisputes ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $MaritimeArbitration ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $CustomsClearance ?></div>
            </div>
                    
                   
                </div>
            </div>
			
			            <div class="tab-pane container fade" id="Gallery">
                <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold"><?php echo $SaleRentText ?></h5>
                            <span class="underline"></span>
                        </div>
                    </div>
                    
		<div class="col-12">
			<div class="owl-carousel media-carousel" id="gallery-carousel">
				<?php
				$sql = "SELECT * FROM `inspection_gallery`";
				$result = $dbconnect->query($sql);
				while ( $row = $result->fetch_assoc() ){
				?>
				<div class="item">
					<div class="news-box" style="height:540px">
						<a class="nav-link clickedImage" href="#" data-toggle="modal" data-target="#enlargeImage" id="<?php echo "logos/".$row["image"] ?>"><div style="background-image: url('logos/<?php echo $row["image"] ?>');" class="img" ></div></a> 
						<p class="text-center bold" >
						<?php if ( $directionHTML == "rtl" ){ echo $row["arTitle"];} else{echo $row["enTitle"];} ?>
						</p>
						
						<p class="m-2 <?php if ( $directionHTML == "rtl" ){ echo "text-right";} else{echo "text-left";} ?>" >
						<?php if ( $directionHTML == "rtl" ){ echo $row["arDetails"];} else{echo $row["enDetails"];} ?>
						</p>
						
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>

					
                </div>
            </div>
			
            <div class="tab-pane container fade" id="courses1">
                <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold">TRAINING COURSES</h5>
                            <span class="underline"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel owl-carousel1">
						
						<?php 
						// inspection about
						
						$sql = "SELECT * FROM `courses` WHERE `company` = '2'  AND `hidden` = '0' ";
						$result = $dbconnect->query($sql);
						while ( $row = $result->fetch_assoc() ){
						?>
                            <div class="item">
                                <div class="training-box courseInfo" data-toggle="modal" data-target="#step-modal" id="<?php echo $row["id"] ?>" >
                                    <div class="sec-1">
                                        <div style="background-image: url('logos/<?php echo $row["image"] ?>');" class="img"></div>
                                        <p><?php if ( $directionHTML == "rtl" ){ echo $row["arTitle"]; }else{echo $row["enTitle"];} ?></p>
                                        <p class="mt-4 bold">by: <?php echo $row["instructor"] ?></p>
                                    </div>
                                    <div class="dotted-line"></div>
                                    <div class="sec-2">
                                        <p><?php echo $row["noOfLectures"] ?> Lectures</p>
										<p>
										<?php if ( isset($row["discount"]) AND $row["discount"] != 0 ){ ?>
										<span><?php echo $row["price"]-($row["price"]*$row["discount"]/100)?> KD</span>
										<span class="cancel"><?php echo $row["price"] ?> KD</span>
										<?php
										}else{
											?>
											<span><?php echo $row["price"] ?> KD</span>
											<?php
										}
										?>
										</p>
                                    </div>
                                </div>
                            </div>
						<?php
						}
						?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sec-pad  padding-bottom tab-section" id="about">
    <div class="container">
        <ul class="nav nav-pills tab-nav-pills pl-0 pr-0">
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link active" data-toggle="tab" href="#about2"><?php echo $about ?></a>
            </li>
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#activities2"><?php echo $services ?></a>
            </li>
			<?php
			$sql = "SELECT * FROM `courses` WHERE `company` = '3'  AND `hidden` = '0' ";
			$result = $dbconnect->query($sql);
			if ( $result->num_rows > 0 ){
			?>
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#courses2">TRAINING COURSES</a>
            </li>
			<?php
			}
			?>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="about2">
                <div class="row form-row d-flex align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <img src="img/logo.svg" class="img-fluid mb-4" alt="" style="width:180px">
                        <p>
						<?php 
						// european about
						
						$sql = "SELECT * FROM `about` WHERE `id` = '1'";
						$result = $dbconnect->query($sql);
						$row = $result->fetch_assoc();
						if ( $directionHTML == "rtl" ){
							echo urldecode($row["europeanAr"]);
						}else{
							echo urldecode($row["european"]);
						}
						?>
						</p>
                    </div>
                    <div class="col-lg-4 col-md-5 text-right">
                        <img src="img/tomohimage1.jpg" class="img-fluid" alt="about" style="box-shadow: 0px 0px 14px 1px black;border-radius: 10px;">
                    </div>
                </div>
            </div>
            <div class="tab-pane container fade" id="activities2">
                <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold"><?php echo $services ?></h5>
                            <span class="underline"></span>
                        </div>
                    </div>
					            <div class="col-lg-6 col-sm-12">
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $MarineStudies ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $EducationalSciences ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $PublicRelations ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $Insurance ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $ACS ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $ForeignPolicy ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $CoursesArbitration ?></div>
            </div>
			<div class="col-lg-6 col-sm-12">
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $LegalPrograms ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $EngineeringTechnical ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $HSPSciences ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $EFSciences ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $OSS ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $MarineAirNavigation ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $EnvironmentalSciences ?></div>
            </div>
					<!--
                    <div class="col-lg-4 col-md-6 services-margin">
                        <div class="services-box dark-blue">
                            <div class="icon-box">
                                <img src="img/training-icon.png" class="img-fluid">
                            </div>
                            <h5><?php echo $Training ?></h5>
                            <p><?php echo $ServiceOne ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 services-margin">
                        <div class="services-box light-blue">
                            <div class="icon-box">
                                <img src="img/legal-icon.png" class="img-fluid">
                            </div>
                            <h5><?php echo $RegisteringMembershipText ?></h5>
                            <p><?php echo $ServiceThree ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 services-margin">
                        <div class="services-box dark-blue">
                            <div class="icon-box">
                                <img src="img/arbitration-icon.png" class="img-fluid">
                            </div>
                            <h5><?php echo $ArbitrationText ?></h5> 
                            <p><?php echo $ServiceTwo ?></p>
                        </div>
                    </div>
-->
                </div>
				
            </div>
            <div class="tab-pane container fade" id="courses2">
                <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold">TRAINING COURSES</h5>
                            <span class="underline"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel owl-carousel1">
                            
							<?php 
						// european courses
						
						$sql = "SELECT * FROM `courses` WHERE `company` = '3'  AND `hidden` = '0' ";
						$result = $dbconnect->query($sql);
						while ( $row = $result->fetch_assoc() ){
						?>
                            <div class="item">
                                <div class="training-box courseInfo" data-toggle="modal" data-target="#step-modal" id="<?php echo $row["id"] ?>">
                                    <div class="sec-1">
                                        <div style="background-image: url('logos/<?php echo $row["image"] ?>');" class="img"></div>
                                        <p><?php echo $row["enTitle"] ?></p>
                                        <p class="mt-4 bold">by: <?php echo $row["instructor"] ?></p>
                                    </div>
                                    <div class="dotted-line"></div>
                                    <div class="sec-2">
                                        <p><?php echo $row["noOfLectures"] ?> Lectures</p>
										<p>
										<?php if ( isset($row["discount"]) AND $row["discount"] != 0 ){ ?>
										<span><?php echo $row["price"]-($row["price"]*$row["discount"]/100)?> KD</span>
										<span class="cancel"><?php echo $row["price"] ?> KD</span>
										<?php
										}else{
											?>
											<span><?php echo $row["price"] ?> KD</span>
											<?php
										}
										?>
										</p>
                                    </div>
                                </div>
                            </div>
						<?php
						}
						?>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sec-pad light-bg padding-bottom tab-section" id="international"> 
    <div class="container">
        <ul class="nav nav-pills tab-nav-pills pl-0 pr-0">
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;" class="nav-link active" data-toggle="tab" href="#about3"><?php echo $about ?></a>
            </li>
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#activities3"><?php echo $services ?></a>
            </li>
			<?php
			$sql = "SELECT * FROM `courses` WHERE `company` = '1'  AND `hidden` = '0' ";
			$result = $dbconnect->query($sql);
			if ( $result->num_rows > 0 ){
			?>
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#courses3"><?php echo $TrainingCourses ?></a>
            </li>
			<?php
			}
			?>
			<li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#activities4" style="white-space: nowrap;"><?php echo $creditsTexttab ?></a>
            </li>
			<li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#activities10"><?php echo $services ?></a>
            </li>
			
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="about3">
                <div class="row form-row d-flex align-items-center">
                    <div class="col-lg-8 col-md-7 mt-5">
                        <img src="img/image2.svg" class="img-fluid mb-4" alt="" style="width:180px">
                        <p>
						<?php 
						// iig about
						
						$sql = "SELECT * FROM `about` WHERE `id` = '1'";
						$result = $dbconnect->query($sql);
						$row = $result->fetch_assoc();
						if ( $directionHTML == "rtl" ){
							echo urldecode($row["iigAr"]);
						}else{
							echo urldecode($row["iig"]);
						}
						?>
						</p>
                    </div>
                    <div class="col-lg-4 col-md-5 text-right">
                        <img src="img/signing-docs.jpg" class="img-fluid" alt="about" style="box-shadow: 0px 0px 14px 1px black;border-radius: 10px;">
                    </div>
                </div>
            </div>
			
			
			         <div class="tab-pane fade" id="activities4">
                <div class="row form-row d-flex align-items-center">
                    <div class="col-lg-8 col-md-7 mt-5">
                        <img src="img/courtlogo.png" class="img-fluid mb-4" alt="">
                        <p>
							<?php echo $courtdescText ?>
						</p>
                    </div>
                    <div class="col-lg-4 col-md-5 text-right">
                        <img src="img/courteur1.jpg" class="img-fluid" alt="about" style="box-shadow: 0px 0px 14px 1px black;border-radius: 10px;">
                    </div>
                </div>
            </div>
			
			
            <div class="tab-pane container fade mt-5" id="activities3">
                <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold"><?php echo $services ?></h5>
                            <span class="underline"></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 services-margin">
                        <div class="services-box dark-blue">
                            <div class="icon-box">
                                <img src="img/training-icon.png" class="img-fluid">
                            </div>
                            <h5><?php echo $Training ?></h5>
                            <p><?php echo $Training2 ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 services-margin">
                        <div class="services-box light-blue">
                            <div class="icon-box">
                                <img src="img/legal-icon.png" class="img-fluid">
                            </div>
                            <h5><?php echo $ConsultingLegal ?> </h5>
                            <p><?php echo $LegalConsulting ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 services-margin">
                        <div class="services-box dark-blue">
                            <div class="icon-box">
                                <img src="img/arbitration-icon.png" class="img-fluid">
                            </div>
                            <h5><?php echo $ConsultingArbitration ?></h5>
                            <p><?php echo $ArbitrationConsulting ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 services-margin">
                        <div class="services-box light-blue">
                            <div class="icon-box">
                                <img src="img/administrative-icon.png" class="img-fluid">
                            </div>
                            <h5><?php echo $ConsultingAdministrative?></h5>
                            <p><?php echo $ManagementConsulting ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane container fade" id="courses3">
                <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold"><?php echo $TrainingCourses ?></h5>
                            <span class="underline"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel owl-carousel1">
                           
						   <?php 
						// iig courses
						
						$sql = "SELECT * FROM `courses` WHERE `company` = '1'  AND `hidden` = '0' ";
						$result = $dbconnect->query($sql);
						while ( $row = $result->fetch_assoc() ){
						?>
                            <div class="item">
                                <div class="training-box courseInfo" data-toggle="modal" data-target="#step-modal" id="<?php echo $row["id"] ?>">
                                    <div class="sec-1">
                                        <div style="background-image: url('logos/<?php echo $row["image"] ?>');" class="img"></div>
                                        <p><?php if ( $directionHTML == "rtl" ){ echo $row["arTitle"]; }else{echo $row["enTitle"];} ?></p>
                                        <p class="mt-4 bold"><?php echo $ByIns ?>: <?php echo $row["instructor"] ?></p>
                                    </div>
                                    <div class="dotted-line"></div>
                                    <div class="sec-2">
                                        <p><?php echo $row["noOfLectures"] ?> <?php echo $LecturesNum ?></p>
										<p>
										<?php if ( isset($row["discount"]) AND $row["discount"] != 0 ){ ?>
										<span><?php echo $row["price"]-($row["price"]*$row["discount"]/100)?> KD</span>
										<span class="cancel"><?php echo $row["price"] ?> KD</span>
										<?php
										}else{
											?>
											<span><?php echo $row["price"] ?> KD</span>
											<?php
										}
										?>
										</p>
                                    </div>
                                </div>
                            </div>
						<?php
						}
						?>
						   
                        </div>
                    </div>
                </div>
            </div>
			            <div class="tab-pane container fade mt-5" id="activities10">
                <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold"><?php echo $services ?></h5>
                            <span class="underline"></span>
                        </div>
                    </div>
			
								
                    <div class="col-lg-4 col-md-6 services-margin">
                        <div class="services-box dark-blue">
                            <div class="icon-box">
                                <img src="img/training-icon.png" class="img-fluid">
                            </div>
                            <h5><?php echo $Training ?></h5>
                            <p><?php echo $ServiceOne ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 services-margin">
                        <div class="services-box light-blue">
                            <div class="icon-box">
                                <img src="img/legal-icon.png" class="img-fluid">
                            </div>
                            <h5><?php echo $RegisteringMembershipText ?></h5>
                            <p><?php echo $ServiceThree ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 services-margin">
                        <div class="services-box dark-blue">
                            <div class="icon-box">
                                <img src="img/arbitration-icon.png" class="img-fluid">
                            </div>
                            <h5><?php echo $ArbitrationText ?></h5> 
                            <p><?php echo $ServiceTwo ?></p>
                        </div>
                    </div>
					</div>

			
        </div>
    </div>
</div>
</div>
<div class=" light-bg padding-bottom tab-section" id="AAA" style="background-color: white;">
    <div class="container">
        <ul class="nav nav-pills tab-nav-pills pl-0 pr-0">
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link active" data-toggle="tab" href="#about5"><?php echo $about ?></a>
            </li>
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#activities5"><?php echo $services ?></a>
            </li>
			<li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#Gallery5"><?php echo $GalleryText ?></a>
            </li>
			<?php 
			$sql = "SELECT * FROM `courses` WHERE `company` = '0' AND `hidden` = '0' ";
			$result = $dbconnect->query($sql);
			if ( $result->num_rows > 0 ){
				?>
            <li class="nav-item">
                <a style="font-size:16px!important;
	font-weight: 700;"  class="nav-link" data-toggle="tab" href="#courses5">TRAINING  COURSES</a>
            </li>
			<?php 
			}
			?>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="about5">
                <div class="row form-row d-flex align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <img src="img/logo-marine3.svg" class="img-fluid mb-4" alt="" style="width: 280px;">
                        <p>
						<?php 
						// com4 about
						
						$sql = "SELECT * FROM `about` WHERE `id` = '1'";
						$result = $dbconnect->query($sql);
						$row = $result->fetch_assoc();
						if ( $directionHTML == "rtl" ){
							echo urldecode($row["com4Ar"]);
						}else{
							echo urldecode($row["com4"]);
						}
						?>
						</p>
                    </div>
                    <div class="col-lg-4 col-md-5 text-right">
                        <img src="img/Maritime_Arbitration.jpg" class="img-fluid" alt="about" style="box-shadow: 0px 0px 14px 1px black;border-radius: 10px;">
                    </div>
                </div>
            </div>
            <div class="tab-pane container fade" id="activities5">
                <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold"><?php echo $services ?></h5>
                            <span class="underline"></span>
                        </div> 
                    </div>
                    
                    <div class="col-lg-6 col-sm-12">
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $BlackstrCopy ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $HealthyCopy ?></div>






            </div>
			<div class="col-lg-6 col-sm-12">
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $AluminumCopy ?></div>
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;"> <span class="fa fa-anchor mr-3" style="color: #095877;"></span> <?php echo $WoodCopy ?></div>






            </div>
                    
                   
                </div>
            </div>
			
			<div class="tab-pane container fade" id="Gallery5">
                <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold"><?php echo $GalleryText ?></h5>
                            <span class="underline"></span>
                        </div>
                    </div>
                    
		<div class="col-12">
			<div class="owl-carousel media-carousel" id="gallery5-carousel">
				<?php
				$sql = "SELECT * FROM `triplea_gallery`";
				$result = $dbconnect->query($sql);
				while ( $row = $result->fetch_assoc() ){
				?>
				<div class="item">
					<div class="news-box">
						<a class="nav-link clickedImage" href="#" data-toggle="modal" data-target="#enlargeImage" id="<?php echo "logos/".$row["image"] ?>"><div style="background-image: url('logos/<?php echo $row["image"] ?>');" class="img" ></div></a> 
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>

					
                </div>
            </div>
			
            <div class="tab-pane container fade" id="courses5">
                <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold">TRAINING COURSES</h5>
                            <span class="underline"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel owl-carousel1">
						
						<?php 
						// inspection about
						
						$sql = "SELECT * FROM `courses` WHERE `company` = '0'  AND `hidden` = '0' ";
						$result = $dbconnect->query($sql);
						while ( $row = $result->fetch_assoc() ){
						?>
                            <div class="item">
                                <div class="training-box courseInfo" data-toggle="modal" data-target="#step-modal" id="<?php echo $row["id"] ?>" >
                                    <div class="sec-1">
                                        <div style="background-image: url('logos/<?php echo $row["image"] ?>');" class="img"></div>
                                        <p><?php if ( $directionHTML == "rtl" ){ echo $row["arTitle"]; }else{echo $row["enTitle"];} ?></p>
                                        <p class="mt-4 bold">by: <?php echo $row["instructor"] ?></p>
                                    </div>
                                    <div class="dotted-line"></div>
                                    <div class="sec-2">
                                        <p><?php echo $row["noOfLectures"] ?> Lectures</p>
										<p>
										<?php if ( isset($row["discount"]) AND $row["discount"] != 0 ){ ?>
										<span><?php echo $row["price"]-($row["price"]*$row["discount"]/100)?> KD</span>
										<span class="cancel"><?php echo $row["price"] ?> KD</span>
										<?php
										}else{
											?>
											<span><?php echo $row["price"] ?> KD</span>
											<?php
										}
										?>
										</p>
                                    </div>
                                </div>
                            </div>
						<?php
						}
						?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a id="back_to_top"></a>

<?php include 'footer.php'; ?>