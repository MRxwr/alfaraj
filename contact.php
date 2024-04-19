<?php include 'header.php'; ?>


<div class="inner-slider">
    <div class="container slider-content">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?php echo $contact ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-lg-4 col-12 mb-4">
                <div class="title mb-4">
                    <h3 class="bold"><?php echo $GETINTOUCH ?></h3>
                    <span class="underline"></span>
                </div>
                <p class="mb-md-5 mb-4"><?php echo $Assistance ?></p>
                <div class="contact-div">
                    <div class="media">
                        <img src="img/icon-material-location-on.svg" class="img-fluid">
                      <div class="media-body">
                        <p><?php echo $AddLn1 ?><br><?php echo $AddLn2 ?><br><?php echo $AddLn4 ?></p>
                      </div>
                    </div>
                    <div class="media">
                        <img src="img/icon-awesome-phone-alt.svg" class="img-fluid">
                      <!-- <span class="fa fa-phone mr-3 mt-1"></span> -->
                      <div class="media-body" style="<?php if ($directionHTML == "rtl"){ echo "direction:ltr"; } ?>">
                        <p>+965 25711810 <br>+965 25711810</p>
                      </div>
                    </div>
                    <div class="media">
                        <img src="img/icon-zocial-email.svg" class="img-fluid">
						 <a href="mailto:info@alfaraj.co">
                      <div class="media-body">
                        <p>info@alfaraj.co</p>
                      </div>
					  </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="contact-form">
                    <h5 class="text-center mb-4"><?php echo $AnyQueson ?></h5>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="" name="contactName" class="form-control" placeholder="<?php echo $Name ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="" name="contactEmail" class="form-control" placeholder="<?php echo $Email ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="" name="contactPhone" class="form-control" placeholder="<?php echo $PhoneNumber ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="" name="contactSubject" class="form-control" placeholder="<?php echo $Subject ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea rows="4" id="" name="contactMsg" class="form-control" placeholder="<?php echo $YourMessageHere ?>" required></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn border-btn mt-3 contactSubmit"><?php echo $Submit ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.2512140121607!2d48.0577491144249!3d29.333632658755246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9dbd7ed10131%3A0xc82da62a0b9e6451!2sSalmiya%20Star%20Complex!5e0!3m2!1sen!2sin!4v1611683274280!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<?php include 'footer.php'; ?>