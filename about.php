<?php
 include 'header.php';
 include_once './database/db.php';


?>
		<!-----end-header-------->
		<!----start-content--->
			<div class="content_1">
				<div class="wrap">
					<div class="about">
				<div class="about-top">
					<div class="col span_1_of_about">
							<h3 class="heading">About</h3>
							<div class="section group">
								<div class="grid_1_of_4 images_1_of_4">
						 			<div class="image"><a href="#"><img src="images/prs1.jpg"></a></div>
						 			<h4><a href="#">Adrian Thomas</a> </h4>
						 			<h6>6CEO&amp;Founder</h6>
						 			<p>Lorem ipsum is simply dummy text of the printing and typesetting industry.Lorem ipsum has been </p>
								</div>
								<div class="grid_1_of_4 images_1_of_4">
									<div class="image"><a href="#"><img src="images/prs2.jpg"></a></div>
									 <h4><a href="#">Narate Ketram</a></h4>
									 <h6>Creative Diector</h6>
									 <p>Lorem ipsum is simply dummy text of the printing and typesetting industry.Lorem ipsum has been</p>
								</div>
								<div class="clear"> </div>
								</div>
					</div>
					<div class="col span_1_of_about1">
						<h3 class="heading">Recent Comments By Admin</h3>
						<ul class="comments-custom unstyled">	
						<?php
						$query="SELECT * FROM `user`";
						$data=mysqli_query($con,$query);
						
						while($res=mysqli_fetch_array($data)){
							?>
							 <li class='comments-custom_li'>
							<div class='icon'> </div>
							<div class='right-text'>	
								<a href=''><h4 class='comments-custom_h'>Admin:</h4></a>
									<div class='comments-custom_txt'>
										<a href='#' title='Go to this comment'><?php echo $res['text']?>...</a>
									</div>
									<time><?php echo $res['created_at']?></time>
							</div>
							<div class='clear'> </div>
						</li>
						<?php
						}
						
						
						?>		
					     
							
					</ul>
				</div>
					<div class="clear"> </div>
			</div>
			<div class="about-bottom">
	   		       <div class="about-topgrids">
						<div class="about-topgrid1">
							<h3 class="heading">Who We Are</h3>
							   <img src="images/img.jpg" title="name">
							   <h5>LOREM IPM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT. PRAESENT VESTIBULUM.</h5>
							   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p>
							   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris.Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
						</div>
				   </div>
								<div class="about-histore">
									<h3 class="heading" >History</h3>
									<div class="historey-lines">
										<ul>
											<li><span>2011 &nbsp;-</span></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p></li>
											<div class="clear"> </div>
										</ul>
									</div>
									<div class="historey-lines">
										<ul>
											<li><span>2012 &nbsp;-</span></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p></li>
											<div class="clear"> </div>
										</ul>
									</div>
									<div class="historey-lines">
										<ul>
											<li><span>2013 &nbsp;-</span></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p></li>
											<div class="clear"> </div>
										</ul>
									</div>
									<div class="historey-lines">
										<ul>
											<li><span>2014 &nbsp;-</span></li>
											<li><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aeonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p></li>
											<div class="clear"> </div>
										</ul>
									</div>
								   <div class="clear"> </div>
								</div>
								<div class="about-services">
									<h3 class="heading" >Why Choose Us</h3>
									<div class="questions">
							          <h4><img src="images/marker21.png" alt=""/>&nbsp;What is Lorem Ipsum?</h4>
	        				          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	        		                </div>
	        		                <div class="questions">
							          <h4><img src="images/marker21.png" alt=""/>&nbsp;What is Lorem Ipsum?</h4>
	        				          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	        		                </div>
	        		                <div class="questions">
							          <h4><img src="images/marker21.png" alt=""/>&nbsp;What is Lorem Ipsum?</h4>
	        				          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	        		                </div>
							   </div>
						<div class="clear"></div> 
					</div>
			  </div>
		</div>
		</div>
				</div>
<?php

include 'footer.php';

?>