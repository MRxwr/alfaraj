<?php
include 'header.php';
include 'checkInvoice.php';
?>

<div class="inner-slider">
    <div class="container slider-content">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?php echo $ThankYou ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-12">
                <div class="title">
                    <h5 class="bold"><?php echo $RegistrationConfirmed ?> <span class="fa fa-check-circle" style="color: #095877;"></span></h5>
                    <span class="underline"></span>
                </div>
            </div>
				<div class="table-responsive">
				<table class="table table-borderless">
				  <tbody>
					<tr>
					  <td style="white-space: nowrap;"><?php echo $TrainingCourses ?>:</td>
					  <td>
					  <?php echo $row["course"]; ?>
					  </td>
					</tr>
					<tr>
					  <td style="white-space: nowrap;"><?php echo $StartingDate ?>:</td>
					  <td><?php echo $row["startDate"][0]; ?></td>
					</tr>
					<tr>
					  <td style="white-space: nowrap;"><?php echo $StartingDate ?>:</td>
					  <td><?php $row["endDate"] = explode(" ", $row["endDate"]); echo $row["endDate"][0]; ?></td>
					</tr>
				  </tbody>
				</table>
				
				</div>
            <div class="col-12">
				<div class="title">
                    <h5 class="bold"><?php echo $CandidateInformation ?></h5>
                    <span class="underline"></span>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-borderless">

				  <tbody>
					<tr>
					  <td><?php echo $Name ?>:</td>
					  <td><?php echo $row["name"]; ?></td>
					</tr>
					<tr>
					  <td><?php echo $Nationality ?>:</td>
					  <td><?php echo $row["nationalty"]; ?></td>
					</tr>
					<tr>
					  <td><?php echo $Email ?>:</td>
					  <td><?php echo $row["email"]; ?></td>
					</tr>
					<tr>
					  <td><?php echo $PhoneNumber ?>:</td>
					  <td><?php echo $row["phone"]; ?></td>
					</tr>
					<tr>
					  <td><?php echo $Qualification ?>:</td>
					  <td><?php echo $row["qualification"]; ?></td>
					</tr>
				  </tbody>
				</table>
                
            </div>

        </div>
		<a class="btn btn-lg btn-block header-btn w-50" href="index.php" role="button"><?php echo $home ?></a>
    </div>
</div>

<?php include 'footer.php'; ?>