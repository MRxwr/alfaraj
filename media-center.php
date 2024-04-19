<?php include 'header.php'; ?>
<style>
.slidersImage{
	width:100%;
	height: 270px;
}
</style>
<div class="inner-slider">
    <div class="container slider-content">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?php echo $mediaCenter ?></h1>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-12">
                <div class="title">
                    <h3 class="bold"><?php echo $LatestNews ?></h3>
                    <span class="underline"></span>
                </div>
            </div>
            <div class="col-12">
                <div class="owl-carousel media-carousel" id="media-carousel">
                    <?php
					$sql = "SELECT * FROM `news`";
					$result = $dbconnect->query($sql);
					while ( $row = $result->fetch_assoc() ){
					?>
					<div class="item">
                        <div class="news-box" style="height: 470px;">
                            <div style="background-image: url('logos/<?php echo $row["image"] ?>');" class="img"></div>
                            <div class="content" style="">
                                <p class="content-line text-center">
								<?php
								if ( $directionHTML == "rtl" ){
									echo $row["titleAr"];
								}else{
									echo $row["title"] ;
								}
								?>
								</p>
                                <div class="text-center">
                                    <p class="theme-color bold mb-2"><?php echo $Published ?>: <?php $date1 = explode(" ", $row["date"]); echo $date1[0]; ?></p>
                                    <a href="news.php?id=<?php echo $row["id"] ?>"><button class="btn bold"><?php echo $ViewDetails ?></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
					}
					?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-12">
                <div class="title">
                    <h3 class="bold"><?php echo $VideoGalleyText ?></h3>
                    <span class="underline"></span>
                </div>
            </div>
            <div class="col-12">
                <div class="owl-carousel media-carousel" id="video-carousel">
                    <?php
					$sql = "SELECT * FROM `news_Video`";
					$result = $dbconnect->query($sql);
					while ( $row = $result->fetch_assoc() ){
					?>
					<div class="item">
                        <iframe class="slidersImage" src="<?php echo str_replace("watch?v=","embed/",$row["video"]) ?>" allowfullscreen ></iframe>
                    </div>
					<?php
					}
					?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-12">
                <div class="title">
                    <h3 class="bold"><?php echo $AudioGalleyText ?></h3>
                    <span class="underline"></span>
                </div>
            </div>
            <div class="col-12">
                <div class="owl-carousel media-carousel" id="audio-carousel">
                    <?php
					$sql = "SELECT * FROM `news_Audio`";
					$result = $dbconnect->query($sql);
					while ( $row = $result->fetch_assoc() ){
						if ( $directionHTML == "rtl" ){
							$title = $row["titleAr"];
						}else{
							$title = $row["title"];
						}
					?>
					<div class="item" style="width: 70%;">
					<p style="text-align: justify;"><?php echo $title ?></p>
					<div>
					  <audio controls style="width: 200px;">
						  <source src="mp3/<?php echo $row["audio"] ?>" type="audio/mpeg">
						</audio>
						</div>
                    </div>
					<?php
					}
					?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-12">
                <div class="title">
                    <h3 class="bold"><?php echo $NewspaperText ?></h3>
                    <span class="underline"></span>
                </div>
            </div>
            <div class="col-12">
                <div class="owl-carousel media-carousel" id="newspaper-carousel">
                    <?php
					$sql = "SELECT * FROM `news_papers`";
					$result = $dbconnect->query($sql);
					while ( $row = $result->fetch_assoc() ){
						if ( $directionHTML == "rtl" ){
							$details = $row["detailsAr"];
						}else{
							$details = $row["details"];
						}
					?>
					<div class="item">
                        <div class="news-box" style="height: 350px;">
							<a class="nav-link " href="<?php echo $row["link"] ?>" ><div style="background-image: url('logos/<?php echo $row["image"] ?>');" class="img" ></div>
							<b><?php echo $details ?></b>
							</a>

							
                        </div>
                    </div>
					<?php
					}
					?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-pad">
    <div class="container">
        <div class="row form-row">
            <div class="col-12">
                <div class="title">
                    <h3 class="bold"><?php echo $GalleryText ?></h3>
                    <span class="underline"></span>
                </div>
            </div>
            <div class="col-12">
                <div class="owl-carousel media-carousel" id="gallery-carousel">
                    <?php
					$sql = "SELECT * FROM `news_gallery`";
					$result = $dbconnect->query($sql);
					while ( $row = $result->fetch_assoc() ){
						if ( $directionHTML == "rtl" ){
							$details = $row["detailsAr"];
						}else{
							$details = $row["details"];
						}
					?>
					<div class="item">
                        <div class="news-box" style="height: 330px;">
							<a class="nav-link clickedImage" href="#" data-toggle="modal" data-target="#enlargeImage" id="<?php echo "logos/".$row["image"] ?>"><div style="background-image: url('logos/<?php echo $row["image"] ?>');" class="img" ></div>
							<?php echo $details ?>
							</a>

							
                        </div>
                    </div>
					<?php
					}
					?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>