<div class="modal enlargeImage" id="enlargeImage">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-body p-3">
		<div class="container-fluid">
			<div class="row w-100 p-3 mt-3 mb-3">
				<div class="col">
					<img src="" class="makeMeLarge" style="width:100%;height:100%">
				</div>
			</div>
		</div>
		</div>
    </div>
  </div>
</div>

<div class="modal consultationModal" id="consultationModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-body p-3">
		<div class="container-fluid">
			<div class="row w-100 p-3 mt-3 mb-3">
				<div class="col">
					<div class="pb-3">
					    <?php echo $consulatationBooking ?>
					</div>
					<span style="width: 50px;height: 2px;display: block; background-color: #095877;"></span>
				</div>
			</div>
			<div class="row w-100">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="form-group">
						<label><?php echo $Name ?></label>
						<input type="name" class="form-control" id="" name="conName" value="">
					</div>
					
					<div class="form-group">
						<label><?php echo $Email ?></label>
						<input type="email" class="form-control" id="" name="conEmail" value="">
					</div>
					
					<div class="form-group">
						<label><?php echo $PhoneNumber ?></label>
						<input type="phone" class="form-control" id="" name="conPhone" value="">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="form-group">
						<label><?php echo $consultation ?></label>
						<select class="form-control ConsultationType" name="conType">
						<option selected disabled>Select Consultation</option>
						<?php
						$sql = "SELECT * FROM `consultation` GROUP BY `type`";
						$result = $dbconnect->query($sql);
						while ( $row = $result->fetch_assoc()){
							if ( !empty($row["type"]) ){
						?>
							<option><?php echo $row["type"] ?></option>
						<?php
							}
						}
						?>
						</select>
						<i class="fa fa-angle-down"></i>
					</div>
					
					<div class="form-group">
						<label><?php echo $SelectDate ?></label>
						<input type="date" name="conDate" class="form-control" style="width:100%">
					</div>
					
					<div class="form-group">
						<label><?php echo $SelectTime ?></label>
						<select class="form-control typeTime" name="conTime">
							<?php
							$sql = "SELECT * FROM `consultation` GROUP BY `time`";
							$result = $dbconnect->query($sql);
							while ( $row = $result->fetch_assoc()){
								if ( !empty($row["time"]) ){
							?>
								<option><?php echo $row["time"] ?></option>
							<?php
								}
							}
							?>
						</select>
						<i class="fa fa-angle-down"></i>
					</div>
				</div>
			</div>
			<p style="text-align: center;font-size: 13px;color: #344b70;"><?php echo $ConsultationDuration ?></p>
			<div class="row w-100">
				<div class="col text-center">
					<div class="form-group">
						<button class="btn w-50" id="conButton" style="background-color: #344b70; color: white;" ><?php echo $BookNow ?></submit>
					</div>
				</div>
			</div>
		</div>
		</div>
    </div>
  </div>
</div>

<div class="modal step-modal" id="step-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-body p-0">
            <form id="stepped" class="mb-0" action="payment.php" method="post">
                <div class="container">
                    <div class="row justify-content-center step-popup">
                        <div class="col-lg-6 left-div-padding">
                            <div class="fix-height position-relative">
                                <div class="steps">
                                    <div class="title mb-3">
                                        <h6 class="bold"><?php echo $TrainingCourses ?></h6>
                                        <span class="underline"></span>
                                    </div>
                                    <p class="bold cTitle">Diploma in Arbitraon in Marime Accident Disputes</p>
                                    <p class="text-muted mb-1"><?php echo $AboutThisCourse ?></p>
                                    <p class=" cDetails">Lorem Ipsum Is Simply Dummy Text Of The Prinng And Typeseng Industry. Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The 1500S, When An Unknown Printer Took A</p>
                                    <p class="text-muted mb-1"><?php echo $Instructer ?></p>
                                    <div class="theme-color">
                                        <div class="tooltip cTeacher cTeacherToolTip" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
											<span class="" >Hamad Alzaid</span>
                                        </div>
                                    </div>
                                    <p class="text-muted mb-1"><?php echo $Duration ?></p>
                                    <p class="cLectures">30 Lectures</p>
									<p class="text-muted mb-1"><?php echo $Period ?></p>
                                    <p class="cPeriod">30 Lectures</p>
                                    <!-- <p class="text-muted">Select Starng Date</p> -->
                                    <!-- <dropdown class="cust-drop">
                                      <input id="toggle1" type="checkbox">
                                      <label for="toggle1" class="animate mb-0">Select Start Date</label>
                                      <ul class="animate">
                                        
                                        <h1 class="center"></h1>
                                        <div class="calendar mt-4">
                                          <div class="group">
                                            <p class="one left pointer minusmonth">&laquo;</p>
                                            <p class="two left monthname center pointer"></p>
                                            <p class="three right pointer addmonth">&raquo;</p>
                                          </div>
                                          <ul class="group">
                                            <li>Mo</li>
                                            <li>Tu</li>
                                            <li>We</li>
                                            <li>Th</li>
                                            <li>Fr</li>
                                            <li>Sa</li>
                                            <li>Su</li>
                                          </ul>
                                        </div>

                                      </ul>
                                    </dropdown>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Select Start Date</option>
                                            <option>03 Jan 2021</option>
                                            <option>04 Jan 2021</option>
                                            <option>05 Jan 2021</option>
                                            <option>06 Jan 2021</option>
                                        </select>
                                    </div>-->
                                </div>
                                <div class="steps">
                                    <div class="title mb-3">
                                        <h5 class="bold"><?php echo $CandidateInformation ?></h5>
                                        <span class="underline"></span>
                                    </div>
                                    <p class="bold mb-2 cStartDate"><?php echo $StartingDate ?>: &nbsp;&nbsp; 04/02/2021</p>
                                    <p class="bold mb-4 cEndDate"><?php echo $EndingDate ?>: &nbsp;&nbsp;&nbsp;&nbsp; 04/03/2021</p>
                                    <div class="form-group">
                                        <label><?php echo $Name ?></label>
                                        <input type="text" class="form-control" id="" name="name" value="">
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo $Nationality ?></label>
                                        <select class="form-control" name="nationality">
											<?php 
											$sql = "SELECT `CountryName` FROM `cities` GROUP BY `CountryName`";
											$result = $dbconnect->query($sql);
											while ( $row = $result->fetch_assoc()){
											?>
                                            <option value="<?php echo $row["CountryName"] ?>"><?php echo $row["CountryName"] ?></option>
											<?php
											}
											?>
                                        </select>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo $Email ?></label>
                                        <input type="email" class="form-control" id="" name="email" value="">
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo $PhoneNumber ?></label> 
                                        <input type="Number" class="form-control" id="" name="phone" value="">
										<input type="hidden" class="form-control" id="payment" name="paymentMethod" value="1">
										<input type="hidden" class="form-control" id="courseId" name="courseId" value="">
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo $Qualification ?></label>
                                        <select class="form-control" name="qualification">
                                            <option>Non Graduated</option>
                                            <option>High School</option>
									        <option>Diploma</option>
                                            <option>Bachelor</option>
											<option>Maseter</option>
											<option>Phd</option>
											
                                        </select>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="steps">
                                    <div class="title mb-3">
                                        <h6 class="bold"><?php echo $PAYMENTINFORMATION ?></h6>
                                        <span class="underline"></span>
                                    </div>
                                    <p class="bold"><?php echo $TC ?></p>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" name="checkboxCourse" required >
                                        <label class="custom-control-label" for="customCheck"><a target="_blank" href="policy.php" ><?php echo $AgreeTC ?></a></label>
                                    </div>
									
									<div id="paymentDiv" >
									<p class="bold mt-4"><?php echo $PaymentMethods ?></p>
                                    <div class="payment-div">
                                        <a href="#" class="d-block"><p class="payKnet active"><img src="img/knet-icon.png">Knet</p></a>
                                        <a href="#" class="d-block"><p class="payVisa "><img src="img/visa-icon.png">Visa</p></a>
										<a href="#" class="d-block"><p class="payCash "><img src="https://i.imgur.com/RGvUpLX.png">Cash</p></a>
                                    </div>
									</div>
                                    <hr>
                                    <div class="d-flex align-items-center justify-content-between pb-5">
                                        <h6 class="bold"><?php echo $Total ?></h6>
                                        <h6 class="bold cPrice">350 KD</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btnNext btn popup-btn mt-5"><span><?php echo $RegisterNow ?></span><span class="cPrice">350KD</span></button> 
                            </div>
                        </div>
                        <div class="col-lg-6 light-bg right-div-padding">
                            <div class="modal-step-img">
                                <div style="background-image: url('img/training1.png');" class="img cImage"></div>
                            </div>
                            <div class="indicators d-flex justify-content-center py-4 text-light my-steps-line">
                                <div class="my-padding"><div class="rounded-circle bg-secondary shadow-sm mr-2"><span><?php echo $TrainingCourses ?></span></div></div>
                                <div class="my-padding"><div class="rounded-circle bg-secondary shadow-sm mr-2"><span><?php echo $CandidateInformation ?></span></div></div>
                                <div class="my-padding"><div class="rounded-circle last-child bg-secondary shadow-sm"><span><?php echo $PAYMENTINFORMATION ?></span></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>

<?php
$sql = "SELECT * FROM `contact`";
$result = $dbconnect->query($sql);
$row = $result->fetch_assoc();
?>
<footer class="sec-pad pb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3 links mb-4">
                <h6 class="mb-4 bold"><?php echo $SiteMap ?></h6>
                <p class="mb-2"><a href="Services.php"><span class="fa fa-angle-right"></span><?php echo $services ?></a></p>
                <p class="mb-2"><a href="Clients.php"><span class="fa fa-angle-right"></span><?php echo $OurPartners ?></a></p>
				<p class="mb-2"><a href="courses.php"><span class="fa fa-angle-right"></span><?php echo $COURSES ?></a></p>
                <p class="mb-2"><a href="About-us.php"><span class="fa fa-angle-right"></span><?php echo $aboutUs ?></a></p>
                <p class="mb-2"><a href="media-center.php"><span class="fa fa-angle-right"></span><?php echo $mediaCenter ?></a></p>
                <p class="mb-2"><a href="contact.php"><span class="fa fa-angle-right"></span><?php echo $contact ?></a></p>
            </div>
            <div class="col-lg-4 col-md-5 mb-4">
                <h6 class="mb-4 bold"><?php echo $ContactUs ?></h6>
                <div class="media">
                  <span class="fa fa-map-marker mt-1"></span>
                  <div class="media-body">
                    <p><?php echo $AddLn1 ?><br><?php echo $AddLn2 ?><br><?php echo $AddLn3 ?></p>
                  </div>
                </div>
                <div class="media">
                  <span class="fa fa-phone mt-1"></span>
                  <div class="media-body" style="<?php if ($directionHTML == "rtl"){ echo "direction:ltr"; } ?>">
                    <p>
					+965 <?php echo $row["m1"] ?>
					<br>
					+965 <?php echo $row["m2"] ?>
					<br>
					+965 <?php echo $row["m3"] ?>
					<br>
					+965 <?php echo $row["m4"] ?>
					</p>
					
                  </div>
                </div>
                <div class="media">
				
                  <span class="fa fa-envelope mt-1"></span>
				  <a href="mailto:info@alfaraj.co">
                  <div class="media-body">
                    <p><?php echo $row["email"] ?></p>
                  </div>
				  </a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <h6 class="mb-4 bold"><?php echo $ContactWithUs ?></h6>
                <ul class="socials pl-0 pr-0">
                    <li><a href="<?php echo $row["yt"] ?>"><span class="fa fa-youtube"></span></a></li>
                    <li><a href="<?php echo $row["tw"] ?>"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="<?php echo $row["insta"] ?>"><span class="fa fa-instagram"></span></a></li>
                    <li><a href="<?php echo $row["fb"] ?>"><span class="fa fa-facebook"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="footer-line">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><?php echo $Copyright ?> <a href ="http://www.createkuwait.com/" target=_blank>Createkuwait.com</a>.</p>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery-3.3.1.slim.min.js" ></script>
<script src="js/jquery-1.11.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-select.min.js"></script>

<script type="text/javascript">
nloop = 0;
    $( document ).ready(function() {
        new WOW().init();
		<?php 
		if ( $orderSet == '1' ){
			?>
			//$('#successInvoice').modal('show');
			alert('Payment Successfull, We will contact you soon.');
			<?php
		}elseif( $orderSet == '0' ){
			?>
			//$('#failedInvoice').modal('show');
			alert('Payment Failed, please try again.');
			<?php
		}
		?>
    });
	
	
	
	$(function(){
		$('.clickedImage').on("click",function(e){
			e.preventDefault();
			var imageURL = $(this).attr("id");
			//console.log(imageURL);
			$('.makeMeLarge').attr("src",imageURL);
		});
	});
	
	$(function(){
		$('.ConsultationType').change(function(e){
			e.preventDefault();
			var type = $(this).val();
			$.ajax({
				type:"POST",
				url: "functions.php",
				data: {
					conType: type,
				},
				success:function(result){
					$('.typeDates').html(result);
				}
			});
		});
		
		$('.typeDates').change(function(e){
			e.preventDefault();
			var dates = $(this).val();
			var type = $(".ConsultationType").val();
			$.ajax({
				type:"POST",
				url: "functions.php",
				data: {
					conDate: dates,
					conType: type,
				},
				success:function(result){
					$('.typeTime').html(result);
				}
			});
		});
		
		/*
		$('.btnNext').click(function(e){
			e.preventDefault();
			var Name = $("input[name=name]").val();
			var nationality = $("input[name=nationality]").val();
			var email = $("input[name=email]").val();
			var phone = $("input[name=phone]").val();
			var qualification = $("select[name=qualification]").val();
			if ( Name == "" || nationality == "" || email == "" || phone == "" || qualification ){
    			alert("please fill all fields.")
			};
		});*/
		
		$('#conButton').click(function(e){
			e.preventDefault();
			var conName = $("input[name=conName]").val();
			var conEmail = $("input[name=conEmail]").val();
			var conPhone = $("input[name=conPhone]").val();
			var conType = $("select[name=conType]").val();
			var conDates = $("input[name=conDate]").val();
			var conTime = $("select[name=conTime]").val();
			if ( conName != "" && conEmail != "" && conPhone != "" && conType != "" && conDates != "" && conTime != ""){
			$.ajax({
				type:"POST",
				url: "functions.php",
				data: {
					booking: 1,
					name: conName,
					email: conEmail,
					phone: conPhone,
					type: conType,
					conDate: conDates,
					time: conTime,
				},
				success:function(result){
					alert("Your booking has been saved successfully.")
					$("input[name=conName]").val('');
					$("input[name=conEmail]").val('');
					$("input[name=conPhone]").val('');
					$("select[name=conType]").val('');
					$("input[name=conDate]").val('');
					$("select[name=conTime]").val('');
				}
			});
			}else{
				alert("please fill all fields.")
			}
		});
		
		$('.payVisa').click(function(e){
			e.preventDefault();
			$('.payKnet').removeClass('active');
			$('.payCash').removeClass('active');
			$('.payVisa').addClass('active');
			$('#payment').val('2');
		});
		$('.payKnet').click(function(e){
			e.preventDefault();
			$('.payKnet').addClass('active');
			$('.payCash').removeClass('active');
			$('.payVisa').removeClass('active');
			$('#payment').val('1');
		});
		$('.payCash').click(function(e){
			e.preventDefault();
			$('.payCash').addClass('active');
			$('.payKnet').removeClass('active');
			$('.payVisa').removeClass('active');
			$('#payment').val('3');
		});
	});
	
	$(function(){
		$('.courseInfo').click(function(e){
		e.preventDefault();
		var id = $(this).attr('id');		
			$.ajax({
				type:"POST",
				url: "functions.php",
				data: {
					itemId: id,
				},
				success:function(result){
					var result = result.split('^');
					var dates = result[4].split('->');
					$('.cTitle').html(result[0]);
					$('.cDetails').html(result[1]);
					$('.cTeacher').html(result[2]);
					$('.cLectures').html(result[3] + ' Lectures');
					$('.cPeriod').html(result[4]);
					$('.cPrice').html(result[5] + ' KD');
					$('.cStartDate').html('Starting Date: ' + dates[0]);
					$('.cEndDate').html('Ending Date: ' + dates[1]);
					var d = new Date();
					var month = d.getMonth()+1;
					var day = d.getDate();
					var output = d.getFullYear() + '-' + month + '-' + day;
					if ( new Date(output) >=  new Date(dates[0]) ){
						alert("This course has ended.");
						$(".btnNext").attr("style","display:none");
					}else{
						$(".btnNext").attr("style","display:block");
					}
					$('input[name=courseId]').val(id);
					$('.cImage').attr('style','background-image: url(logos/'+result[6]+')');
					$(".cTeacherToolTip").attr("data-original-title",result[7]);
					//console.log(result[7]);
					//console.log(result[8]);
					if ( result[8] == "1" ){
						$('#paymentDiv').attr('style','display:none');
						$('#payment').val('4');
					}else{
						$('#paymentDiv').attr('style','display:block');
						$('#payment').val('1');
					}
				}
			});
			
		});
	});
	
	$(function(){
		$('.contactSubmit').click(function(e){
		e.preventDefault();
		var nameCont = $('input[name=contactName]').val();
		var emailCont = $('input[name=contactEmail]').val();
		var phoneCont = $('input[name=contactPhone]').val();
		var subjectCont =  $('input[name=contactSubject]').val();
		var msgCont =  $('textarea[name=contactMsg]').val();
		if ( nameCont != "" && emailCont != "" && phoneCont != "" && subjectCont != "" && msgCont != ""){
			$.ajax({
				type:"POST",
				url: "email.php",
				data: {
					name: nameCont,
					email: emailCont,
					phone: phoneCont,
					subject: subjectCont,
					msg: msgCont,
				},
				success:function(result){
					alert("Email has been submitted.")
					$('input[name=contactName]').val('');
					$('input[name=contactEmail]').val('');
					$('input[name=contactPhone]').val('');
					$('input[name=contactSubject]').val('');
					$('textarea[name=contactMsg]').val('');
				}
			});
			}else{
			alert("please fill all fields.")
			}
		});
		
	});

    // document.querySelectorAll('a[href^="#main-sec"]').forEach(anchor => {
    //     anchor.addEventListener('click', function (e) {
    //         e.preventDefault();
    //         document.querySelector(this.getAttribute('href')).scrollIntoView({
    //             behavior: 'smooth'
    //         });
    //     });
    // });



    $(function(){
        $('.selectpicker').selectpicker();
    });

    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });

    var btn = $('#back_to_top');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '300');
    });



    //change directory
    $(document).ready(function(){
      $('.en').click(function() {
         $("html[lang=he]").attr("dir", "ltr");
          $("#body").addClass("left-to-right");
      });

      $('.arab').click(function() {
         $("html[lang=he]").attr("dir", "rtl");
        $("#body").removeClass("left-to-right");
      });
        
    });
    
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      rtl: true,
      navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
      ],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })

    $('#media-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      rtl: true,
      navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
      ],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
	
	$('#newspaper-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      rtl: true,
      navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
      ],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
	
	$('#video-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      rtl: true,
      navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
      ],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
	
	$('#audio-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      rtl: true,
      navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
      ],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
	
	$('#gallery-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      rtl: true,
      navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
      ],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
	
	$('#gallery5-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      rtl: true,
      navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
      ],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })

    //$('#inputDate').datepicker({});

    var themonth = 1;
    renderCal(themonth);

    $('.minusmonth').click(function(){
      themonth += -1;
      renderCal(themonth);
    });

    $('.addmonth').click(function(){
      themonth += 1;
      renderCal(themonth);
    });

    function renderCal(themonth){
    $('.calendar li').remove();
    $('.calendar ul').append('<li>Mo</li><li>Tu</li><li>We</li><li>Th</li><li>Fr</li><li>Sa</li> <li>Su</li>');
    var d = new Date(),
      currentMonth = d.getMonth()+themonth, // get this month
      days = numDays(currentMonth,d.getYear()), // get number of days in the month
      fDay = firstDay(currentMonth,d.getYear())-1, // find what day of the week the 1st lands on
      months = ['January','February','March','April','May','June','July','August','September','October','November','December']; // month names

    $('.calendar p.monthname').text(months[currentMonth-1]); // add month name to calendar

    for (var i=0;i<fDay-1;i++) { // place the first day of the month in the correct position
      $('<li>&nbsp;</li>').appendTo('.calendar ul');
    }

    for (var i = 1;i<=days;i++) { // write out the days
      $('<li>'+i+'</li>').appendTo('.calendar ul');
    }

    function firstDay(month,year) {
      return new Date(year,month,1).getDay();
    }

    function numDays(month,year) {
      return new Date(year,month,0).getDate();
    }

    var clicker = 0;
    var min = 0;
    var max = 0;

    $('.calendar li').click(function(){ // toggle selected dates
      if(clicker==0){
        clicker=1;
        $('.calendar li').removeClass('red');
        $(this).addClass('red');
        min = $(this).text();
      } else {
        clicker=0;
        $(this).addClass('red');
        $('.calendar li.red').each(function(){
          max = $(this).text();
        });
        for(i=parseInt(min);i<parseInt(max);i++){
          $('.calendar li:nth-of-type('+(i+7+fDay-1)+')').addClass('red'); 
        }
      }
    });
    }
	
</script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
 class MultiStep {
  constructor(formId) {
   let myForm = document.querySelector(formId),
    steps = myForm.querySelectorAll(".steps"),
    // btnPrev = myForm.querySelector(".btnPrev"),
    btnNext = myForm.querySelector(".btnNext"),
    indicators = myForm.querySelectorAll(".rounded-circle"),
    inputClasses = ".abc",
    currentTab = 0;

   // we'll need 4 different functions to do this
   showTab(currentTab);

   function showTab(n) {
    steps[n].classList.add("active");
    // if (n == 0) {
    //  btnPrev.classList.add("hidden");
    //  btnPrev.classList.remove("show");
    // } else {
    //  btnPrev.classList.add("show");
    //  btnPrev.classList.remove("hidden");
    // }
    // if (n == steps.length - 1) {
    //  btnNext.textContent = "Submit";
    // } else {
    //  btnNext.textContent = "Next";
    // }
    showIndicators(n);
   }

   function showIndicators(n) {
    for (let i = 0; i < indicators.length; i++) {
     indicators[i].classList.replace("bg-warning", "bg-success");
    }
    indicators[n].className += " bg-warning";
   }

   function clickerBtn(n) {
    if (n == 1 && !validateForm()) return false;
    steps[currentTab].classList.remove("active");
    currentTab = currentTab + n;
    if (currentTab >= steps.length) {
     myForm.submit();
     return false;
    }
    showTab(currentTab);
   }
// Do whatever validation you want
   function validateForm() {
    let input = steps[currentTab].querySelectorAll(inputClasses),
     valid = true;
    for (let i = 0; i < input.length; i++) {
     if (input[i].value == "") {
      if (!input[i].classList.contains("invalid")) {
       input[i].classList.add("invalid");
      }
      valid = false; 
     }
     if (!input[i].value == "") {
      if (input[i].classList.contains("invalid")) {
       input[i].classList.remove("invalid");
      }
     }
    }
    return valid;
   }
   // btnPrev.addEventListener("click", () => {
   //  clickerBtn(-1);
   // });
   
   btnNext.addEventListener("click", () => {
           if ( nloop == 2 ){
			   if ( $("input[name=checkboxCourse]").is(':checked') ) {
				   clickerBtn(1);
			   }else{
				   alert('Please check terms and conditions checkbox.')
			   }
		   }
		   
		   if ( nloop == 1 ){
			var Name = $("input[name=name]").val();
			var nationality = $("select[name=nationality]").val();
			var email = $("input[name=email]").val();
			var phone = $("input[name=phone]").val();
			var qualification = $("select[name=qualification]").val();
			if ( Name == "" || nationality == "" || email == "" || phone == "" || qualification == "" ){
    			alert("please fill all fields.")
    			//console.log(Name + ' ' + nationality + ' ' + email + ' ' + phone + ' ' + qualification + ' ' + nloop);
    			nloop = 1;
			}else{
			    clickerBtn(1);
				nloop = 2;
			}
           }
		   
		   if ( nloop == 0 ) {
               clickerBtn(1);
               nloop = 1;
           }
   });
  }
 }
 let MS = new MultiStep("#stepped");
});


// //smooth scroll
// // Select all links with hashes
// $('a[href*="#"]')
//   // Remove links that don't actually link to anything
//   .not('[href="#"]')
//   .not('[href="#0"]')
//   .click(function(event) {
//     // On-page links
//     if (
//       location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
//       && 
//       location.hostname == this.hostname
//     ) {
//       // Figure out element to scroll to
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//       // Does a scroll target exist?
//       if (target.length) {
//         // Only prevent default if animation is actually gonna happen
//         event.preventDefault();
//         $('html, body').animate({
//           scrollTop: target.offset().top
//         }, 1000, function() {
//           // Callback after animation
//           // Must change focus!
//           var $target = $(target);
//           $target.focus();
//           if ($target.is(":focus")) { // Checking if the target was focused
//             return false;
//           } else {
//             $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
//             $target.focus(); // Set focus again
//           };
//         });
//       }
//     }
//   });


//$(document).ready(function() {
  //  $( ".nav-link" ).bind( "click", function(event) {
    //    event.preventDefault();
      //  var clickedItem = $( this );
        //$( ".nav-link" ).each( function() {
          //  $( this ).removeClass( "active" );
        //});
      //  clickedItem.addClass( "active" );
   // });
//});




</script>
</body>
</html>