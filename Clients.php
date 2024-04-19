<?php include 'header.php'; ?>


<div class="inner-slider">
    <div class="container slider-content">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?php echo $servicesTitle ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-12">
                <div class="title">
                    <h3 class="bold"><?php echo $servicesTitle //$MeetOurPartners ?></h3>
                    <span class="underline"></span>
                </div>
            </div>
			
			<?php 
			$sql = "SELECT * FROM `clients`";
			$result = $dbconnect->query($sql);
			while ( $row = $result->fetch_assoc() ){
			?>
            <div class="col-lg-3 col-sm-12">
				<div class="mt-3 group-box2" style="padding: 10px;">  <a href="<?php echo $row["link"] ?>"><img src="logos/<?php echo $row["image"] ?>" style="width: 220px;height: 220px;display: block;margin-left: auto;margin-right: auto;border: 1px solid #70707036;padding: 10px;"></a></div>
            </div>
			<?php
			}
			?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>