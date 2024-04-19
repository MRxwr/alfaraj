<!DOCTYPE html>
<html lang="en">
<?php 
require ("template/header.php");
require ("includes/config.php");
require ("includes/checksouthead.php");

if ( isset($_GET["update"]) AND $_GET["update"] = 1 )
{
    $link0 = $_POST["link0"];
	$details0 = $_POST["details0"];
	$detailsAr0 = $_POST["detailsAr0"];
    $sql = "UPDATE `newandimportant` 
			SET 
			`details`= '".$details0."',
			`detailsAr`= '".$detailsAr0."',
			`link`= '".$link0."'
			WHERE `id` = '1'
			";
    $result = $dbconnect->query($sql);
	
	$link1 = $_POST["link1"];
	$details1 = $_POST["details1"];
	$detailsAr1 = $_POST["detailsAr1"];
	$sql = "UPDATE `newandimportant` 
			SET 
			`details`= '".$details1."',
			`detailsAr`= '".$detailsAr1."',
			`link`= '".$link1."'
			WHERE `id` = '2'
			";
    $result = $dbconnect->query($sql);
}

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
<?php
$formTarget = "?update=1";

$sql = "SELECT * FROM `newandimportant` WHERE `id` LIKE '1'";
$result = $dbconnect->query($sql);
$row = $result->fetch_assoc();
$link0 = $row["link"];
$details0 = $row["details"];
$detailsAr0 = $row["detailsAr"];

$sql = "SELECT * FROM `newandimportant` WHERE `id` LIKE '2'";
$result = $dbconnect->query($sql);
$row = $result->fetch_assoc();
$formTarget = "?update=1";
$link1 = $row["link"];
$details1 = $row["details"];
$detailsAr1 = $row["detailsAr"];
?>

<form action="<?php echo $formTarget ?>" method="POST" enctype="multipart/form-data">
<div class="form-body">
<h6 class="txt-dark capitalize-font">
<i class="zmdi zmdi-account mr-10"></i>New in website
</h6>
<hr class="light-grey-hr"/>
<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Link</label><br>
<input type="text" name="link0" class="form-control" value="<?php echo $link0 ?>">
</div>
</div>

</div>

<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Details in english</label>
<textarea name="details0" class="tinymce" ><?php echo $details0 ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Details in Arabic</label>
<textarea name="detailsAr0" class="tinymce" ><?php echo $detailsAr0 ?></textarea>
</div>
</div>

</div>

<!--/span-->
</div>

<div class="form-body">
<h6 class="txt-dark capitalize-font">
<i class="zmdi zmdi-account mr-10"></i>Important to you
</h6>
<hr class="light-grey-hr"/>
<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Link</label><br>
<input type="text" name="link1" class="form-control" value="<?php echo $link1 ?>">
</div>
</div>

</div>

<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Details in english</label>
<textarea name="details1" class="tinymce" ><?php echo $details1 ?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Details in Arabic</label>
<textarea name="detailsAr1" class="tinymce" ><?php echo $detailsAr1 ?></textarea>
</div>
</div>

</div>

<!--/span-->
</div>

<!-- /Row -->
</div>
<div class="form-actions mt-10">
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

<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="dist/js/productorders-data2.js"></script>
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
