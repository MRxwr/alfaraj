<?php include 'header.php'; ?>

<?php
$sql = "SELECT * FROM `copyrights`";
$result = $dbconnect->query($sql);
$row = $result->fetch_assoc();
?>
<div class="inner-slider">
    <div class="container slider-content">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?php   ?>
				
				<?php if ( $directionHTML == 'rtl' ){ echo "الشروط و الأحكام"; }else{ echo "Terms & Conditions"; } ?>
				
				</h1>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-12 col-sm-12">
						<?php if ( $directionHTML == 'rtl' ){ echo $row["terms"];}else{ echo $row["details"];} ?>
                </div>
		</div>
    </div>
</div>
		
    </div>
</div>

<?php include 'footer.php'; ?>