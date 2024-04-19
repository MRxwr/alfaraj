<!DOCTYPE html>
<html lang="en">
<?php 
require ("template/header.php");
require ("includes/config.php");
require ("includes/checksouthead.php");
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

<?php
if ( isset($_GET["canId"]) ){
    $sql = "UPDATE `invoices`
            SET
            `status` = '1'
            WHERE
            `id` LIKE '".$_GET["canId"]."'
            ";
    $result = $dbconnect->query($sql);
}
if ( !isset($_GET["details"]) ){
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
<th>date</th>
<th>Name</th>
<th>Phone</th>
<th>Nationality</th>
<th>Email</th>
<th>Qualification</th>
<th>Course</th>
<th>Discont</th>
<th>Price</th>
<th>Method</th>
<th>Start Date</th>
<th>End Date</th>
<th>Status</th>
<th><?php echo $Actions ?></th>
</tr>
</thead>
<tbody>
<?php
$i = 1;
$sql = "SELECT * FROM `invoices` WHERE `status` NOT LIKE '2' OR `paymentMethod` LIKE '3' OR `paymentMethod` LIKE '4' ";
$result = $dbconnect->query($sql);
while ( $row = $result->fetch_assoc() ){
?>
<tr>
<td class="txt-dark">
<?php echo $row["orderId"]; ?>
</td>
<td class="txt-dark">
<?php $date = explode(" ",$row["date"]) ; echo $date[0]; ?>
</td>
<td>
<?php echo $row["name"]; ?>
</td>
<td>
<?php echo $row["phone"]; ?>
</td>
<td>
<?php echo $row["nationalty"]; ?>
</td>
<td>
<?php echo $row["email"]; ?>
</td>
<td>
<?php echo $row["qualification"]; ?>
</td>
<td>
<?php echo $row["course"]; ?>
</td>
<td>
<?php echo $row["discount"]; ?>
</td>
<td>
<?php if ( $row["discount"] != 0 ) { echo $row["price"]-($row["discount"]*$row["price"]/100) ;}else{ echo $row["price"];} ?>
</td>
<td>
<?php if ( $row["paymentMethod"] == 1 ) { echo "KNET" ;}elseif($row["paymentMethod"] == 2 ){ echo "VISA";}elseif($row["paymentMethod"] == 3 ){ echo "Cash";}elseif($row["paymentMethod"] == 4 ){ echo "Free";} ?>
</td>
<td>
<?php $row["startDate"] = explode(" ", $row["startDate"]) ; echo $row["startDate"][0]; ?>
</td>
<td>
<?php $row["endDate"] = explode(" ", $row["endDate"]) ; echo $row["endDate"][0]; ?>
</td>
<td>
<?php if ( $row["status"] == 0 ){echo "Success";}elseif( $row["status"] == 1 ){ echo "Cancelled";} ?>
</td>
<td>
<a href="?canId=<?php echo $row["id"] ?>" class="font-18 txt-grey mr-10 pull-left" data-toggle="tooltip" data-placement="top" title="<?php echo $Details ?>"><i class="fa fa-close"></i></a>

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
}else{
	?>
	
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
