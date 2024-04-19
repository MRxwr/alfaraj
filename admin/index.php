<?php
require ("includes/config.php");
require ("includes/checksouthead.php");
die();
?>
<!DOCTYPE html>
<html lang="en">
<?php require ("template/header.php"); ?>
<?php 
if ( isset($_POST["switch"]) )
{
	$sql = "UPDATE maintenance 
			SET 
			`status` = '".$_POST["switch"]."'
			WHERE `id` LIKE '1'
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
            <div class="container-fluid ">
				<!-- Row -->
				<div class="row text-center" style="padding:16px">
				-:: Welcome to ALFARAJ CP ::-
				</div>

<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view pa-0">
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
	<div class="sm-data-box">
		<div class="container-fluid">
			<div class="row">
			
			Select Date
			<form action="" method="post">
			<div class="col">
				<input type="date" class="form-control" name="startDate">
			</div>
			<div class="col">
				<input type="date" class="form-control" name="endDate">
			</div>
			<div class="col">
				<input type="submit" class="form-control" name="send">
			</div>
			</form>
			
			</div>	
		</div>
	</div>
</div>
</div>
</div>
</div>
				
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view pa-0">
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
	<div class="sm-data-box">
		<div class="container-fluid">
			<div class="row">
			
			<?php
			$sql = "SELECT * FROM `courses` WHERE `hidden` LIKE '0'";
			$result = $dbconnect->query($sql);
			$numberOfRows = $result->num_rows;
			?>
			
				<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
					<span class="txt-dark block counter"><span class="counter-anim"><?php echo $numberOfRows ?></span></span>
					<span class="weight-500 uppercase-font block font-13">Courses</span>
				</div>
				<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
					<i class="icon-layers data-right-rep-icon txt-light-grey"></i>
				</div>
			</div>	
		</div>
	</div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view pa-0">
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
	<div class="sm-data-box">
		<div class="container-fluid">
			<div class="row">
			<?php
			$sql = "SELECT * FROM `invoices` WHERE `status` LIKE '0' ";
			if ( isset($_POST["startDate"]) ){
				$sql .= "AND `date` BETWEEN '".$_POST["startDate"]."' AND '".$_POST["endDate"]."' ";
			}
			$sql .= "GROUP BY `phone` ";
			$result = $dbconnect->query($sql);
			$numberOfRows = $result->num_rows;
			?>
				<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
					<span class="txt-dark block counter"><span class="counter-anim"><?php echo $numberOfRows ?></span></span>
					<span class="weight-500 uppercase-font block">Candidates</span>
				</div>
				<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
					<i class="icon-user-following data-right-rep-icon txt-light-grey"></i>
				</div>
			</div>	
		</div>
	</div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view pa-0">
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
	<div class="sm-data-box">
		<div class="container-fluid">
			<div class="row">
			<?php
			$sql = "SELECT SUM(price) as TotalPrice FROM `invoices` WHERE `status` LIKE '0'";
			if ( isset($_POST["startDate"]) ){
				$sql .= "AND `date` BETWEEN '".$_POST["startDate"]."' AND '".$_POST["endDate"]."' ";
			}
			$result = $dbconnect->query($sql);
			$row = $result->fetch_assoc();
			$TotalPrice = $row["TotalPrice"];
			?>
				<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
					<span class="txt-dark block counter"><span class="counter-anim"><?php echo $TotalPrice ?></span>KD</span>
					<span class="weight-500 uppercase-font block">Income</span>
				</div>
				<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
					<i class="icon-money data-right-rep-icon txt-light-grey"></i>
				</div>
			</div>	
		</div>
	</div>
</div>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="display:none">
<div class="panel panel-default card-view pa-0">
<div class="panel-wrapper collapse in">
<div class="panel-body pa-0">
	<div class="sm-data-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
					<span class="txt-dark block counter"><span class="counter-anim">4,054,876</span></span>
					<span class="weight-500 uppercase-font block">pageviews</span>
				</div>
				<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
					<i class="icon-layers data-right-rep-icon txt-light-grey"></i>
				</div>
			</div>	
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Course Candidates</h6>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body row pa-0">
<div class="table-wrap">
	<div class="table-responsive">
	  <table class="table table-hover mb-0">
		<thead>
		  <tr>
			<th>Course</th>
			<th>Candidates</th>
			<th>Type</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$sql = "SELECT c.*,  count(c.id) as `realNumber`
				FROM `courses` as c
				JOIN `invoices` as i
				on i.courseId = c.id
				WHERE
				c.hidden LIKE '0'
				";
		if ( isset($_POST["startDate"]) ){
			$sql .= "AND i.date BETWEEN '".$_POST["startDate"]."' AND '".$_POST["endDate"]."' ";
		}
		$sql .= "GROUP BY c.id ";
		$result = $dbconnect->query($sql);
		while ( $row = $result->fetch_assoc() ){
			$courses[] = $row["id"];
		?>
		  <tr>
			<td><?php echo $row["enTitle"] ?></td>
			<td><?php echo $row["realNumber"] ?></td>
			<td><?php if ( $row["free"] == 0 ){ echo "Paid";}else{ echo "Free"; } ?></td>
		  </tr>
		<?php
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

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-default card-view">
<div class="panel-heading">
<div class="pull-left">
<h6 class="panel-title txt-dark">Main Category Candidates</h6>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-wrapper collapse in">
<div class="panel-body row pa-0">
<div class="table-wrap">
	<div class="table-responsive">
	  <table class="table table-hover mb-0">
		<thead>
		  <tr>
			<th>Main Category</th>
			<th>Candidates</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$sql = "SELECT c.*,  count(c.mainCategory) as `realNumber`, mc.title as realTitle
				FROM `courses` as c
				JOIN `invoices` as i
				on i.courseId = c.id
				JOIN `mainCategories` as mc
				on mc.id = c.mainCategory
				WHERE
				c.hidden LIKE '0'
				";
		if ( isset($_POST["startDate"]) ){
			$sql .= "AND i.date BETWEEN '".$_POST["startDate"]."' AND '".$_POST["endDate"]."' ";
		}
		$sql .= "GROUP BY c.mainCategory ";
		$result = $dbconnect->query($sql);
		while ( $row = $result->fetch_assoc() ){
			$courses[] = $row["id"];
		?>
		  <tr>
			<td><?php echo $row["realTitle"] ?></td>
			<td><?php echo $row["realNumber"] ?></td>
		  </tr>
		<?php
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
				
				<!-- /Row -->
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
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Sweet-Alert  -->
	<script src="../vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
	<script src="dist/js/sweetalert-data.js"></script>
		
	<!-- Switchery JavaScript -->
	<script src="../vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
</body>

</html>
