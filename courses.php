<?php include 'header.php'; ?>
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active1, .accordion:hover {
  background-color: #095877; 
  color:white;
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>

<div class="inner-slider">
    <div class="container slider-content">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?php echo $TrainingCourses ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
                        <div class="row form-row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold"><?php echo $COURSES ?></h5>
                            <span class="underline"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="owl-carousel owl-carousel1">
                           
						   <?php 
						// iig courses
						
						$sql = "SELECT * FROM `courses` WHERE `subOfSub` = ? AND `hidden` LIKE '0'";
						$stmt = $dbconnect->prepare($sql);
						$stmt->bind_param("i", $_GET["id"]);
						$stmt->execute();
						$result = $stmt->get_result();
						while ($row = $result->fetch_assoc()) {
						?>
                            <div class="item">
                                <div class="training-box courseInfo" data-toggle="modal" data-target="#step-modal" id="<?php echo $row["id"] ?>">
                                    <div class="sec-1">
                                        <div style="background-image: url('logos/<?php echo $row["image"] ?>');" class="img"></div>
                                        <p><?php if ( $directionHTML == "rtl" ){ echo $row["arTitle"]; }else{echo $row["enTitle"];} ?></p>
                                        <p class="mt-4 bold">by: <?php echo $row["instructor"] ?></p>
                                    </div>
                                    <div class="dotted-line"></div>
                                    <div class="sec-2">
                                        <p><?php echo $row["noOfLectures"] ?> Lectures</p>
										<p>
										<?php if ( isset($row["discount"]) AND $row["discount"] != 0 ){ ?>
										<span><?php echo $row["price"]-($row["price"]*$row["discount"]/100)?> KD</span>
										<span class="cancel"><?php echo $row["price"] ?> KD</span>
										<?php
										}else{
											?>
											<span><?php echo $row["price"] ?> KD</span>
											<?php
										}
										?>
										</p>
                                    </div>
                                </div>
                            </div>
						<?php
						}
						$stmt->close();
						?>
						   
                        </div>
                    </div>
                </div>
				   <div class="row">
                    <div class="col-lg-12 ">
                        <div class="title">
                            <h5 class="bold"><?php echo $BuyOurBook ?></h5>
                            <span class="underline"></span>
                        </div>
                    </div>
                    
					<div class="col-lg-6 col-sm-12">
					<img src="img/Farajbook.jpeg" width="350px" class="img-fluid">
					</div>
					<div class="col-lg-6 col-sm-12 mt-3">
					<div class="h3"><?php echo $ArbitrationBook ?></div>
					<div class=""><?php echo $TheFirstBook ?></div>
					
	<form class=" g-3" action="buyBook.php" method="post">		
	
	<select name="book" class="form-select w-50 mt-3" aria-label="Default select example" required >
	  <option disabled ><?php echo $BookType ?></option>
	  <option value="1"><?php echo $ElectronicCopy ?> (5 KD)</option>
	  <option value="2"><?php echo $PrintedCopy ?> (10 KD)</option>
	  
	</select>
	<p class="mt-3"> <ins><?php echo $PrintedCopyPrice ?> <mark><?php echo $Kuwait ?></mark> <?php echo $ShippingCharges ?></ins></p>
	
	<button class="accordion"><?php echo $BuyNow ?></button>
				<div class="panel">
											  
  <div class="col-md-12 mt-3">
    <label for="inputEmail4" class="form-label"><?php echo $Name ?></label>
    <input type="Name" name="name1" class="form-control" id="inputName" required>
  </div>
  <div class="col-md-12 mt-3">
    <label for="inputPassword4" class="form-label"><?php echo $PhoneNumber ?></label>
    <input type="number" name="phone1" class="form-control" id="inputNumber" required>
  </div>
    <div class="col-md-12">
    <label for="inputPassword4" class="form-label"><?php echo $Email ?></label>
    <input type="email" name="email1" class="form-control" id="inputEmail" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label"><?php echo $Address ?></label>
    <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label"><?php echo $Address ?> 2</label>
    <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>


  <div class="col-12 mt-3">
    <button type="submit" class="btn btn-primary"><?php echo $Buy ?></button>
  </div>
</form>
											</div>




								
					</div>

                    
                </div>
    </div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
	  return false;
    }
  });
}
</script>
<?php include 'footer.php'; ?>