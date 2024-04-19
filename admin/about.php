<!DOCTYPE html>
<html lang="en">
<?php 
require ("template/header.php");
require ("includes/config.php");
require ("includes/checksouthead.php");

if ( isset($_POST["update"]) AND $_POST["update"] = 1 )
{
    $Ambition 	= urlencode($_POST["Ambition"]);
	$iig 	  	= urlencode($_POST["iig"]);
	$com4 	  	= urlencode($_POST["com4"]);
	$main 	  	= urlencode($_POST["main"]);
	$iands 	  	= urlencode($_POST["iands"]);
	$AmbitionAr = urlencode($_POST["AmbitionAr"]);
	$iigAr	  	= urlencode($_POST["iigAr"]);
	$mainAr 	= urlencode($_POST["mainAr"]);
	$iandsAr 	= urlencode($_POST["iandsAr"]);
	$com4Ar 	= urlencode($_POST["com4Ar"]);
	$alfarajG 	= urlencode($_POST["alfarajG"]);
	$alfarajGAR = urlencode($_POST["alfarajGAR"]);
	$cv 		= urlencode($_POST["cv"]);
	$cvAr 		= urlencode($_POST["cvAr"]);
    $sql = "UPDATE `about` 
			SET 
			`ambition`= '".$Ambition."',
			`european`= '".$main."',
			`inspection`= '".$iands."',
			`iig`= '".$iig."',
			`com4`= '".$com4."',
			`ambitionAr`= '".$AmbitionAr."',
			`europeanAr`= '".$mainAr."',
			`inspectionAr`= '".$iandsAr."',
			`com4Ar`= '".$com4Ar."',
			`alfarajG`= '".$alfarajG."',
			`alfarajGAR`= '".$alfarajGAR."',
			`cv`= '".$cv."',
			`cvAr`= '".$cvAr."',
			`iigAr`= '".$iigAr."'
			WHERE `id` = 1
			";
    $result = $dbconnect->query($sql);
}

$sql = "SELECT * FROM `about` WHERE `id` LIKE '1' ";
$result = $dbconnect->query($sql);
$row = $result->fetch_assoc();
$Ambition 	= urldecode($row["ambition"]);
$iig 	  	= urldecode($row["iig"]);
$com4 	  	= urldecode($row["com4"]);
$main 	  	= urldecode($row["european"]);
$iands 	  	= urldecode($row["inspection"]);
$AmbitionAr = urldecode($row["ambitionAr"]);
$iigAr 	  	= urldecode($row["iigAr"]);
$mainAr	  	= urldecode($row["europeanAr"]);
$iandsAr	= urldecode($row["inspectionAr"]);
$com4Ar		= urldecode($row["com4Ar"]);
$alfarajG 	= urldecode($row["alfarajG"]);
$alfarajGAR = urldecode($row["alfarajGAR"]);
$cv 		= urldecode($row["cv"]);
$cvAr 		= urldecode($row["cvAr"]);

?>
<body>
<!-- Preloader -->
<div class="preloader-it">
<div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper  theme-1-active pimary-color-green">
<!-- Top Menu Items -->
<?php require ("template/navbar.php") ?>
<!-- /Top Menu Items -->

<!-- Left Sidebar Menu -->
<?php require("template/leftSideBar.php") ?>
<!-- /Left Sidebar Menu -->

<!-- Right Sidebar Menu -->
<div class="fixed-sidebar-right">
</div>
<!-- /Right Sidebar Menu -->



<!-- Right Sidebar Backdrop -->
<div class="right-sidebar-backdrop"></div>
<!-- /Right Sidebar Backdrop -->

<!-- Main Content -->
<div class="page-wrapper">
<div class="container-fluid pt-25">
<!-- Row -->
<div class="row">
<div class="col-md-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark"></h6>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body">
<div class="row">
<div class="col-sm-12 col-xs-12">
<div class="form-wrap">
<form action="" method="POST">
<div class="form-body">
<h6 class="txt-dark capitalize-font">
<i class="zmdi zmdi-account mr-10"></i><?php echo $aboutText ?>
</h6>
<hr class="light-grey-hr"/>
<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Alfaraj Group</label><br>
<textarea name="alfarajG" class="tinymce" ><?php echo $alfarajG ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Alfaraj Group Arabic</label><br>
<textarea name="alfarajGAR" class="tinymce" ><?php echo $alfarajGAR ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">CV</label><br>
<textarea name="cv" class="tinymce" ><?php echo $cv ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">CV Arabic</label><br>
<textarea name="cvAr" class="tinymce" ><?php echo $cvAr ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Altomoh</label><br>
<textarea name="main" class="tinymce" ><?php echo $main ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Altomoh Arabic</label><br>
<textarea name="mainAr" class="tinymce" ><?php echo $mainAr ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Ambition</label>
<textarea name="Ambition" class="tinymce" ><?php echo $Ambition ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Ambition Arabic</label>
<textarea name="AmbitionAr" class="tinymce" ><?php echo $AmbitionAr ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">IIG</label><br>
<textarea name="iig" class="tinymce" ><?php echo $iig ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">IIG Arabic</label><br>
<textarea name="iigAr" class="tinymce" ><?php echo $iigAr ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Inspection and Shipping</label><br>
<textarea name="iands" class="tinymce" ><?php echo $iands ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Inspection and Shipping Arabic</label><br>
<textarea name="iandsAr" class="tinymce" ><?php echo $iandsAr ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">4th Company</label><br>
<textarea name="com4" class="tinymce" ><?php echo $com4 ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">4th Company Arabic</label><br>
<textarea name="com4Ar" class="tinymce" ><?php echo $com4Ar ?></textarea>
</div>
</div>

<!--/span-->
</div>
<!-- -->
<!-- /Row -->
</div>
<div class="form-actions mt-10">
<input type="hidden" value="1" name="update">
<button type="submit" class="btn btn-success  mr-10"><?php echo $save ?></button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>		
</div>
</div>

<!-- Footer -->
<?php require("template/footer.php") ?>
<!-- /Footer -->

</div>
<!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
		<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Tinymce JavaScript -->
		<script src="../vendors/bower_components/tinymce/tinymce.min.js"></script>
					
		<!-- Tinymce Wysuhtml5 Init JavaScript -->
		<script src="dist/js/tinymce-data.js"></script>

		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
</body>

</html>
