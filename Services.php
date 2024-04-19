<?php include 'header.php'; ?>


<div class="inner-slider">
    <div class="container slider-content">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?php echo $services ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-12">
                <div class="title">
                    <h3 class="bold"><?php echo $ServicesProvided ?></h3>
                    <span class="underline"></span>
                </div>
            </div>
			<div class="col-12">
                    <h5 class="bold"><?php echo $TomohInstitute1 ?></h5>
                    <span class="underline"></span>
            </div>
            <?php
			$sql = "SELECT * FROM `services` WHERE `company` LIKE '0'";
			$result = $dbconnect->query($sql);
			while ( $row = $result->fetch_assoc() ){
				if ( $directionHTML == "rtl" ){
					$title = $row["titleAr"];
					$details = $row["detailsAr"];
				}else{
					$title = $row["title"];
					$details = $row["details"];
				}
			?>
			<div class="col-lg-6 col-sm-12">
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;" data-toggle="collapse" href="#<?php echo str_replace(" ","",$row["title"]) . $row['company'] ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
				<span class="fa fa-graduation-cap mr-3 ml-3" style="color: blue;"></span><?php echo $title ?></div>
				
				<div class="collapse" id="<?php echo str_replace(" ","",$row["title"]) . $row['company'] ?>">
					<div class="card card-body">
					<?php
					echo $details ;
					?>
					</div>
				</div>
			</div>
			<?php
			}
			?>
			
						<div class="col-12">
                <div class="">
                    <h5 class="bold mt-5"><?php echo $IIG ?></h5>
                    <span class="" style="width: 50px;height: 2px;display: block;background-color: #095877;"></span>
                </div>
            </div>
            <?php
			$sql = "SELECT * FROM `services` WHERE `company` LIKE '1'";
			$result = $dbconnect->query($sql);
			while ( $row = $result->fetch_assoc() ){
				if ( $directionHTML == "rtl" ){
					$title = $row["titleAr"];
					$details = $row["detailsAr"];
				}else{
					$title = $row["title"];
					$details = $row["details"];
				}
			?>
			<div class="col-lg-6 col-sm-12">
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;" data-toggle="collapse" href="#<?php echo str_replace(" ","",$row["title"]) . $row['company'] ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
				<span class="fa fa-book mr-3 ml-3" style="color: darkred;"></span><?php echo $title ?></div>
				
				<div class="collapse" id="<?php echo str_replace(" ","",$row["title"]) . $row['company'] ?>">
					<div class="card card-body">
					<?php
					echo $details ;
					?>
					</div>
				</div>
			</div>
			<?php
			}
			?>
			
						<div class="col-12">
                <div class="">
                    <h5 class="bold mt-5"><?php echo $InspectionShipping ?></h5>
                    <span class="" style="width: 50px;height: 2px;display: block;background-color: #095877;"></span>
                </div>
            </div>
            <?php
			$sql = "SELECT * FROM `services` WHERE `company` LIKE '2'";
			$result = $dbconnect->query($sql);
			while ( $row = $result->fetch_assoc() ){
				if ( $directionHTML == "rtl" ){
					$title = $row["titleAr"];
					$details = $row["detailsAr"];
				}else{
					$title = $row["title"];
					$details = $row["details"];
				}
			?>
			<div class="col-lg-6 col-sm-12">
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;" data-toggle="collapse" href="#<?php echo str_replace(" ","",$row["title"]) . $row['company'] ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
				<span class="fa fa-anchor mr-3 ml-3" style="color: darkgreen;"></span><?php echo $title ?></div>
				
				<div class="collapse" id="<?php echo str_replace(" ","",$row["title"]) . $row['company'] ?>">
					<div class="card card-body">
					<?php
					echo $details ;
					?>
					</div>
				</div>
			</div>
			<?php
			}
			?>
			
						<div class="col-12">
                <div class="">
                    <h5 class="bold mt-5"><?php echo $AAAText ?></h5>
                    <span class="" style="width: 50px;height: 2px;display: block;background-color: #095877;"></span>
                </div>
            </div>
            
			<?php
			$sql = "SELECT * FROM `services` WHERE `company` LIKE '3'";
			$result = $dbconnect->query($sql);
			while ( $row = $result->fetch_assoc() ){
				if ( $directionHTML == "rtl" ){
					$title = $row["titleAr"];
					$details = $row["detailsAr"];
				}else{
					$title = $row["title"];
					$details = $row["details"];
				}
			?>
			<div class="col-lg-6 col-sm-12">
				<div class="mt-3 group-box1" style="border: 1px solid #7070703b;padding: 10px;" data-toggle="collapse" href="#<?php echo str_replace(" ","",$row["title"]) . $row['company'] ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
				<span class="fa fa-building mr-3 ml-3" style="color: #a02214;"></span><?php echo $title ?></div>
				
				<div class="collapse" id="<?php echo str_replace(" ","",$row["title"]) . $row['company'] ?>">
					<div class="card card-body">
					<?php
					echo $details ;
					?>
					</div>
				</div>
			</div>
			<?php
			}
			?>
			
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>