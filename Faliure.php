<?php
include 'header.php';
include 'checkInvoice.php';
?>

<div class="inner-slider">
    <div class="container slider-content">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Failure</h1>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-12">
                <div class="title">
                    <h5 class="bold"><?php echo $RegistrationFailure ?> <span class="fa fa-times-circle" style="color: #095877;"></span></h5>
                    <span class="underline"></span>
                </div>
            </div>
				

        </div>
		<a class="btn btn-lg btn-block header-btn w-50" href="index.php" role="button"><?php echo $RetryPayment ?></a>
    </div>
</div>

<?php include 'footer.php'; ?>