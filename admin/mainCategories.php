<!DOCTYPE html>
<html lang="en">
<?php 
require ("template/header.php");
require ("includes/config.php");
require ("includes/checksouthead.php");

if ( isset($_POST["update"]) AND $_POST["update"] = 1 ){
    $title = $_POST["title"];
	$titleAr 	 = $_POST["titleAr"];;
    $sql = "INSERT INTO `mainCategories`
			(`title`, `titleAr`)
			VALUES 
			('".$title."', '".$titleAr."')
			";
    $result = $dbconnect->query($sql);
}

if ( isset($_GET["edit"]) ){
    $title = $_POST["title"];
	$titleAr = $_POST["titleAr"];
    $sql = "UPDATE `mainCategories` 
			SET 
			`title`= '".$title."',
			`titleAr`= '".$titleAr."'
			WHERE `id` = '".$_GET["edit"]."'
			";
    $result = $dbconnect->query($sql);
}

if ( isset($_GET["delId"]) ){	
	$sql = "UPDATE `mainCategories` 
			SET 
			`hidden` = '1'
			WHERE `id` = '".$_GET["delId"]."'
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
if ( isset($_GET["editId"]) ){
    $update = '';
	$formTarget = "?edit=" . $_GET["editId"];
	$sql = "SELECT * FROM `mainCategories` WHERE `id` LIKE '".$_GET["editId"]."'";
    $result = $dbconnect->query($sql);
	$row = $result->fetch_assoc();
}else{
	$formTarget = "?update=1";
	$update = '<input type="hidden" name="update" value="1"/>';
}
?>

<form action="<?php echo $formTarget ?>" method="POST" enctype="multipart/form-data">
    <?=$update?>
<div class="form-body">
<h6 class="txt-dark capitalize-font">
<i class="zmdi zmdi-account mr-10"></i><?php echo "Main Category" ?>
</h6>
<hr class="light-grey-hr"/>
<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Title</label><br>
<input type="text" name="title" class="form-control" value="<?php if ( isset($_GET["editId"]) ){ echo $row["title"]; } ?>">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Title Arabic</label><br>
<input type="text" name="titleAr" class="form-control" value="<?php if ( isset($_GET["editId"]) ){ echo $row["titleAr"]; } ?>">
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

<?php
if ( !isset($_GET["editId"]) ){
?>
<div class="row">
<div class="col-sm-12">
<div class="panel panel-default card-view">
<div class="panel-wrapper collapse in">
<div class="panel-body row">
<div class="table-wrap">
<div class="table-responsive">
<table class="table display responsive product-overview mb-30" id="myTable">
<thead>
<tr>
<th>#</th>
<th><?php echo $titleText ?></th>
<th><?php echo $titleText . "Arabic" ?></th>
<th><?php echo $Actions ?></th>
</tr>
</thead>
<tbody>
<?php
$i = 1;
$sql = "SELECT * FROM `mainCategories` WHERE `hidden` LIKE '0'";
$result = $dbconnect->query($sql);
while ( $row = $result->fetch_assoc() ){
?>
<tr>
<td class="txt-dark">
<?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?>
</td>
<td>
<?php echo $row["title"]; ?>
</td>
<td>
<?php echo $row["titleAr"]; ?>
</td>
<td>
<a href="?delId=<?php echo $row["id"] ?>" class="font-18 txt-grey mr-10 pull-left" data-toggle="tooltip" data-placement="top" title="<?php echo $delete ?>"><i class="fa fa-times"></i></a>

<a href="?editId=<?php echo $row["id"] ?>" class="font-18 txt-grey mr-10 pull-left" data-toggle="tooltip" data-placement="top" title="<?php echo $edit ?>"><i class="fa fa-edit"></i></a>
</td>
</tr>
<?php
$i++;
}
?>

</tbody>
</table>
</div>
</div>	
</div>	
</div>
</div>
</div>
</div>
<?php 
}
?>

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
