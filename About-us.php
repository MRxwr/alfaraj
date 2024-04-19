<?php include 'header.php'; ?>

<div class="inner-slider">
    <div class="container slider-content">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?php echo $aboutUs ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-12">
                <div class="title">
                    <h3 class="bold"><?php echo $AboutALFarajGroup ?></h3>
                    <span class="underline"></span>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12"style="text-align: justify;">
				<p>
					<?php
					$sql = "SELECT * FROM `about` WHERE `id` = '1'";
					$result = $dbconnect->query($sql);
					$row = $result->fetch_assoc();
					if ( $directionHTML == "rtl" ){
						echo urldecode($row["alfarajGAR"]);
					}else{
						echo urldecode($row["alfarajG"]);
					}
					?>
				</p>
            </div>
			<div class="col-lg-5 col-sm-12 p-4">
				<img src="img/ameer.jpeg" class="img-fluid" alt="about">
            </div>
        </div>
		
		<div class="row form-row">
            <div class="col-12"style="text-align: justify;">
				<p>
					<?php
					$sql = "SELECT * FROM `about` WHERE `id` = '1'";
					$result = $dbconnect->query($sql);
					$row = $result->fetch_assoc();
					if ( $directionHTML == "rtl" ){
						echo urldecode($row["cvAr"]);
					}else{
						echo urldecode($row["cv"]);
					}
					?>
				</p>
            </div>
        </div>
		
    </div>
</div>

<?php include 'footer.php'; ?>