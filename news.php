<?php include 'header.php';
// Prepare the SQL statement
$sql = "SELECT * FROM `news` WHERE `id` = ?";
$stmt = $dbconnect->prepare($sql);
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();
?>
<div class="inner-slider">
    <div class="container slider-content">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?php echo $News ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
		
				<div class="col-12 col-sm-12 mt-3 text-center pb-5">
						<strong style="font-size:20px">
						<?php
						if ( $directionHTML == "rtl" ){
							echo $row["titleAr"];
						}else{
							echo $row["title"];
						}
						?>
						</strong>
                </div>
		
				<div class="col-12 col-sm-12 text-center">
						<img src="logos/<?php echo $row["image"] ?>" class="img-fluid">
                </div>
				
				<div class="col-12 col-sm-12 mt-3">
						<strong><?php echo $PublishedDate ?>: <?php $date1 = explode(" ", $row["date"]); echo $date1[0]; ?></strong>
                </div>
            
			    <div class="col-12 col-sm-12 mt-3" style="text-align: justify;">
					<p>
					<?php
					
					if ( $directionHTML == "rtl" ){
						echo $row["arDetails"];
					}else{
						echo $row["enDetails"];
					}
					
					?>
					</p>
                </div>
				</div>
            </div>
				

        </div>
		
    </div>
</div>

<?php include 'footer.php'; ?>