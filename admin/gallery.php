<?php

session_start();

if($_SESSION['email']=='')
{
	header('location:index.php');
}
else{
	include 'nav.php';
	include 'head.php';

?>
	
	
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- gallery -->
				<div class="grids-heading gallery-heading">
					<h2>Gallery</h2>
				</div>
				<div class="gallery-grids">
						<div class="show-reel">
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g1.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g1.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g2.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g2.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g3.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g3.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g4.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g4.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						
						<div class="show-reel">
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g5.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g5.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g6.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g6.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g1.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g1.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g2.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g2.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						
						<div class="show-reel">
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g3.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g3.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g4.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g4.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g5.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g5.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-3 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="images/g6.jpg" class="lsb-preview" data-lsb-group="header">
										<img src="images/g6.jpg" alt="" />
										<div class="agileits-caption">
											<h4>Consectetur</h4>
											<p>Sed ultricies non sem sit amet laoreet. Ut semper erat erat.</p>
										</div>
									</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<script>
							$(window).load(function() {
							  $.fn.lightspeedBox();
							});

						</script>
				</div>
			<!-- //gallery -->

			</div>
		</div>
		
		<!-- footer -->
		<div class="footer">
				<p>© 2020 Test website developed By Abhishek kumar</a></p>
			</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	
	<!-- gallery -->
	<link rel="stylesheet" href="css/lsb.css">
	<script src="js/lsb.js"></script>
	<!-- //gallery -->
	<script src="js/proton.js"></script>
</body>
</html>
<?php
}?>