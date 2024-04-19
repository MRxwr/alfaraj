<?php
$sql = "SELECT * 
		FROM `adminstration` 
		WHERE `email` LIKE '".$email."'";
$result = $dbconnect->query($sql);
if ( $result->num_rows < 1  ){
	$admin = "0";
}else{
	$admin = "1";
}
if ( isset($admin) ){
?>
<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>AL Faraj Menu</span> 
					<i class="zmdi zmdi-more"></i>
				</li>

				<li>
					<a href="invoices.php" ><div class="pull-left">
					<i class="fa fa-credit-card mr-20"></i>
					<span class="right-nav-text"><?php echo $invocesText ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="bookings.php" ><div class="pull-left">
					<i class="fa fa-credit-card mr-20"></i>
					<span class="right-nav-text"><?php echo $bookingsText ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="bookInvoices.php" ><div class="pull-left">
					<i class="fa fa-credit-card mr-20"></i>
					<span class="right-nav-text"><?php echo $bookInvoicesText ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="instructors.php" ><div class="pull-left">
					<i class="fa fa-users mr-20"></i>
					<span class="right-nav-text"><?php echo $instructorsText ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="mainCategories.php" ><div class="pull-left">
					<i class="fa fa-book mr-20"></i>
					<span class="right-nav-text"><?php echo "Main Categories" ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="courses.php" ><div class="pull-left">
					<i class="fa fa-book mr-20"></i>
					<span class="right-nav-text"><?php echo $coursesText ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="subSections.php" ><div class="pull-left">
					<i class="fa fa-bullhorn mr-20"></i>
					<span class="right-nav-text"><?php echo $homeSections ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="news.php" ><div class="pull-left">
					<i class="fa fa-bullhorn mr-20"></i>
					<span class="right-nav-text"><?php echo $newsText ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="newsGallery.php" ><div class="pull-left">
					<i class="fa fa-bullhorn mr-20"></i>
					<span class="right-nav-text"><?php echo $newsText ?> Gallery</span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="tripleaGallery.php" ><div class="pull-left">
					<i class="fa fa-bullhorn mr-20"></i>
					<span class="right-nav-text">Triple A Gallery</span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="inspectionGallery.php" ><div class="pull-left">
					<i class="fa fa-bullhorn mr-20"></i>
					<span class="right-nav-text">Inspection Gallery</span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="newspapers.php" ><div class="pull-left">
					<i class="fa fa-bullhorn mr-20"></i>
					<span class="right-nav-text">Newspaper</span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="newsVideos.php" ><div class="pull-left">
					<i class="fa fa-bullhorn mr-20"></i>
					<span class="right-nav-text"><?php echo $newsText ?> Videos</span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="newsAudio.php" ><div class="pull-left">
					<i class="fa fa-bullhorn mr-20"></i>
					<span class="right-nav-text"><?php echo $newsText ?> Audio</span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="clients.php" ><div class="pull-left">
					<i class="fa fa-users mr-20"></i>
					<span class="right-nav-text"><?php echo $clientsText ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="consultation.php" ><div class="pull-left">
					<i class="fa fa-legal mr-20"></i>
					<span class="right-nav-text"><?php echo $consultationText ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="about.php" ><div class="pull-left">
					<i class="fa fa-info mr-20"></i>
					<span class="right-nav-text"><?php echo $aboutText ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="services.php" ><div class="pull-left">
					<i class="fa fa-info mr-20"></i>
					<span class="right-nav-text"><?php echo "Services" ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="copyrights.php"><div class="pull-left">
					<i class="fa fa-quote-right mr-20"></i>
					<span class="right-nav-text"><?php echo $copyrightsText ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
					
					<a href="socialMedia.php"><div class="pull-left">
					<i class="fa fa-share-alt mr-20"></i>
					<span class="right-nav-text"><?php echo $sMediaText ?></span>
					</div>
					<div class="pull-right"></div><div class="clearfix"></div>
					</a>
						
				</li>

			</ul>
		</div>
<?php
}