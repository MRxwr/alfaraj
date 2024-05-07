<!DOCTYPE html>
<html lang="en">
<?php 
require ("template/header.php");
require ("includes/config.php");
require ("includes/checksouthead.php");

if ( isset($_POST["update"]) AND $_POST["update"] = 1 )
{
	if( is_uploaded_file($_FILES['image']['tmp_name']) ){
		$directory = "../logos/";
		$originalfile = $directory . date("d-m-y") . time() . rand(111111,999999) . ".png";
		move_uploaded_file($_FILES["image"]["tmp_name"], $originalfile);
		$filenewname = str_replace("../logos/",'',$originalfile);
	}else{
		$filenewname = "";
	}
    $enTitle      = $_POST["enTitle"];
	$arTitle      = $_POST["arTitle"];
	$arDetails    = $_POST["arDetails"];
	$enDetails 	  = $_POST["enDetails"];
	$price    	  = $_POST["price"];
	$discount     = $_POST["discount"];
	$noOfLectures = $_POST["noOfLectures"];
	$instructor   = $_POST["instructor"];
	$startDate 	  = $_POST["startDate"];
	$endDate 	  = $_POST["endDate"];
	$company	  = $_POST["company"];
	$mainCategory = $_POST["mainCategory"];
	$subOfSub 	  = $_POST["subOfSub"];
	$free 	  	  = $_POST["free"];
	$sql = "INSERT INTO `courses`
			(`id`, `date`, `image`, `enTitle`, `arTitle`, `instructor`, `noOfLectures`, `price`, `discount`, `enDetails`, `arDetails`, `startDate`, `endDate`, `company`, `mainCategory`, `subOfSub`, `free`)
			VALUES
			(NULL, current_timestamp(), '$filenewname', '$enTitle', '$arTitle', '$instructor', '$noOfLectures', '$price', '$discount', '$enDetails', '$arDetails', '$startDate', '$endDate', '$company', '$mainCategory', '$subOfSub', '$free');
			";
    $result = $dbconnect->query($sql);
}

if ( isset($_GET["edit"]) )
{
	if( is_uploaded_file($_FILES['image']['tmp_name']) ){
		$directory = "../logos/";
		$originalfile = $directory . date("d-m-y") . time() . rand(111111,999999) . ".png";
		move_uploaded_file($_FILES["image"]["tmp_name"], $originalfile);
		$filenewname = str_replace("../logos/",'',$originalfile);
	}else{
		$sql = "SELECT * FROM `news` WHERE `id` LIKE '".$_GET["edit"]."'";
		$result = $dbconnect->query($sql);
		$row = $result->fetch_assoc();
		$filenewname = $row["image"];
	}
    $enTitle      = $_POST["enTitle"];
	$arTitle      = $_POST["arTitle"];
	$arDetails    = $_POST["arDetails"];
	$enDetails 	  = $_POST["enDetails"];
	$price    	  = $_POST["price"];
	$discount     = $_POST["discount"];
	$noOfLectures = $_POST["noOfLectures"];
	$instructor   = $_POST["instructor"];
	$startDate 	  = $_POST["startDate"];
	$endDate 	  = $_POST["endDate"];
	$company 	  = $_POST["company"];
	$mainCategory = $_POST["mainCategory"];
	$subOfSub 	  = $_POST["subOfSub"];
	$free 	  	  = $_POST["free"];
    $sql = "UPDATE `courses` 
			SET 
			`enTitle`= '".$enTitle."',
			`arTitle`= '".$arTitle."',
			`arDetails`= '".$arDetails."',
			`enDetails`= '".$enDetails."',
			`mainCategory`= '".$mainCategory."',
			`subOfSub`= '".$subOfSub."',
			`price`= '".$price."',
			`discount`= '".$discount."',
			`noOfLectures`= '".$noOfLectures."',
			`instructor`= '".$instructor."',
			`startDate`= '".$startDate."',
			`company`= '".$company."',
			`free`= '".$free."',
			`endDate`= '".$endDate."'
			WHERE `id` = '".$_GET["edit"]."'
			";
    $result = $dbconnect->query($sql);
}
die();

if ( isset($_GET["delId"]) ){
	$sql = "UPDATE `courses` SET 
			`hidden` = '1'
			WHERE `id` LIKE '".$_GET["delId"]."'";
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
    $update ='';
	$formTarget = "?edit=" . $_GET["editId"];
	$sql = "SELECT * FROM `courses` WHERE `id` LIKE '".$_GET["editId"]."'";
    $result = $dbconnect->query($sql);
	$row = $result->fetch_assoc();
}else{
	$formTarget = "?update=1";
	$update = '<input type="hidden" name="update" value="1"/>';
}
?>

<form action="<?php echo $formTarget ?>" method="POST" enctype="multipart/form-data">
    <?=$update ?>
<div class="form-body">
<h6 class="txt-dark capitalize-font">
<i class="zmdi zmdi-account mr-10"></i><?php echo $coursesText ?>
</h6>
<hr class="light-grey-hr"/>
<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Title in english</label><br>
<input type="text" name="enTitle" class="form-control" value="<?php if ( isset($_GET["editId"]) ){ echo $row["enTitle"]; } ?>">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Title in Arabic</label><br>
<input type="text" name="arTitle" class="form-control" value="<?php if ( isset($_GET["editId"]) ){ echo $row["arTitle"]; } ?>">
</div>
</div>

</div>

<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Details in english</label>
<textarea name="enDetails" class="tinymce" ><?php if ( isset($_GET["editId"]) ){ echo $row["enDetails"]; }?></textarea>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Details in arabic</label>
<textarea name="arDetails" class="tinymce" ><?php if ( isset($_GET["editId"]) ){ echo $row["arDetails"]; }?></textarea>
</div>
</div>

</div>

<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Price</label><br>
<input type="float" name="price" class="form-control" value="<?php if ( isset($_GET["editId"]) ){ echo $row["price"]; } ?>">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Discount</label><br>
<input type="float" name="discount" class="form-control" value="<?php if ( isset($_GET["editId"]) ){ echo $row["discount"]; } ?>">
</div>
</div>

</div>

<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Number of Lectures</label><br>
<input type="number" name="noOfLectures" class="form-control" value="<?php if ( isset($_GET["editId"]) ){ echo $row["noOfLectures"]; } ?>">
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Photo</label><br>
<input type="file" name="image" class="form-control" >
</div>
</div>

</div>

<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Course Section</label><br>
<select name="subOfSub" class="form-control">
<option value="0">Specialist diploma</option>
<option value="1">Courses and training programs</option>
<option value="2">Conferences and exhibitions</option>
<option value="3">Panel discussions and workshops</option>
</select>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Instructors</label><br>
<select name="instructor" class="form-control">
<?php 
$sql = "SELECT * FROM `instructors`";
$result = $dbconnect->query($sql);
while ( $row = $result->fetch_assoc() ){
	?>
	<option value="<?php echo $row["enName"] ?>"><?php echo $row["enName"] ?></option>
	<?php
}
?>
</select>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Company</label><br>
<select name="company" class="form-control">
<option value="0">Ambition</option>
<option value="1">IIG</option>
<option value="2">Al Faraj for inspection and shipping</option>
<option value="3">European court of arbitration</option>
</select>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Main Category</label><br>
<select name="mainCategory" class="form-control">
<?php 
$sql = "SELECT * FROM `mainCategories` WHERE `hidden` LIKE '0'";
$result = $dbconnect->query($sql);
while ( $row = $result->fetch_assoc() ){
	?>
	<option value="<?php echo $row["title"] ?>"><?php if( $directionHTML == "rtl" ){ echo $row["titleAr"];}else{ echo $row["title"]; }?></option>
	<?php
}
?>
</select>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10">Is Free?</label><br>
<select name="free" class="form-control">
<option value="0">No</option>
<option value="1">Yes</option>
</select>
</div>
</div>

</div>

<div class="row">

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10 text-left">Start Date</label><br>
<input type="date" name="startDate" required >
</div>
</div>	

<div class="col-md-6">
<div class="form-group">
<label class="control-label mb-10 text-left">End Date</label><br>
<input type="date" name="endDate" required >
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
<th><?php echo $enNameText ?></th>
<th><?php echo $arNameText ?></th>
<th><?php echo $Price ?></th>
<th><?php echo $Discount ?></th>
<th><?php echo $instructorsText ?></th>
<th><?php echo $lecturesText ?></th>
<th><?php echo $Actions ?></th>
</tr>
</thead>
<tbody>
<?php
$i = 1;
$sql = "SELECT * FROM `courses` WHERE `hidden` LIKE '0'";
$result = $dbconnect->query($sql);
while ( $row = $result->fetch_assoc() ){
?>
<tr>
<td class="txt-dark">
<?php echo str_pad($i,2,"0",STR_PAD_LEFT) ?>
</td>
<td>
<?php echo $row["enTitle"]; ?>
</td>
<td>
<?php echo $row["arTitle"]; ?>
</td>
<td>
<?php echo $row["price"]; ?>
</td>
<td>
<?php echo $row["discount"]; ?>
</td>
<td>
<?php echo $row["instructor"]; ?>
</td>
<td>
<?php echo $row["noOfLectures"]; ?>
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
		
		<!-- Bootstrap Datetimepicker JavaScript -->
		<script type="text/javascript" src="../vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		
	
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
</body>

</html>
